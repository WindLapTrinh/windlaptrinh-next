//sử lý show danh mục
function showSubcategories(parentId) {
    // Gửi AJAX request để lấy danh mục con
    $.ajax({
        url: `/category/subcategories/${parentId}`,
        method: "GET",
        success: function (data) {
            let tbody = $("#subcategoriesTable tbody");
            tbody.empty();
            if (data.length > 0) {
                data.forEach(function (subcategory, index) {
                    tbody.append(`
                            <tr>
                                <th scope="row">${index + 1}</th>
                                <td>${subcategory.name}</td>
                                <td>${subcategory.slug}</td>
                                <td>${subcategory.desc ?? ""}</td>
                            </tr>
                        `);
                });
            } else {
                tbody.append(
                    `<tr><td colspan="4">Không có danh mục con nào</td></tr>`
                );
            }
        },
    });
}

// Update this part of the JavaScript code
$(document).ready(function () {
    // setting tiny
    tinymce.init({
        selector: "textarea",
        height: 300,
    });
    // Bắt sự kiện click vào nút Edit
    $(".btn-edit-category-post").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDesc = $(this).data("desc");
        var categoryParentId = $(this).data("parent_id");

        // Điền dữ liệu vào modal
        $("#editCategoryModal #edit_name").val(categoryName);
        $("#editCategoryModal #edit_desc").val(categoryDesc);
        $("#editCategoryModal #edit_parent_id").val(categoryParentId);

        // Dynamically build the form action with the base URL and category ID
        var formAction = baseUrl + "/category/post/update/" + categoryId;
        $("#editCategoryForm").attr("action", formAction);

        // Hiển thị modal
        $("#editCategoryModal").modal("show");
    });

    $(".btn-edit-category-product").on("click", function () {
        var categoryId = $(this).data("id");
        var categoryName = $(this).data("name");
        var categoryDesc = $(this).data("desc");
        var categoryParentId = $(this).data("parent_id");

        // Điền dữ liệu vào modal
        $("#editCategoryModal #edit_name").val(categoryName);
        $("#editCategoryModal #edit_desc").val(categoryDesc);
        $("#editCategoryModal #edit_parent_id").val(categoryParentId);

        // Dynamically build the form action with the base URL and category ID
        var formAction = baseUrl + "/category/product/update/" + categoryId;
        $("#editCategoryForm").attr("action", formAction);

        // Hiển thị modal
        $("#editCategoryModal").modal("show");
    });

    // Bắt sự kiện click vào nút Edit cho bài viết
    $(".btn-edit-post").on("click", function () {
        var postId = $(this).data("id");
        var postTitle = $(this).data("title");
        var postContent = $(this).data("content");
        var postCategory = $(this).data("category");
        var postStatus = $(this).data("status");
        let imageUrl = $(this).data("image");
        // Điền dữ liệu vào modal bài viết
        $("#post_id").val(postId);
        $("#post_title").val(postTitle);
        $("#post_content").val(postContent);
        $("#post_category").val(postCategory);

        // Hiển thị ảnh hiện tại nếu có
        if (imageUrl) {
            $("#current_image").attr("src", imageUrl).show();
        } else {
            $("#current_image").hide();
        }

        //Set status radio button
        if (postStatus === "published") {
            $("#status_published").prop("checked", true);
        } else {
            $("#status_pending").prop("checked", true);
        }

        // Hiển thị modal bài viết
        $("#editModal").modal("show");
    });

    $(".btn-edit-product").on("click", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        var desc = $(this).data("desc");
        var details = $(this).data("details");
        console.log("Details:", details);
        var price = $(this).data("price");
        var stockQuantity = $(this).data("stock-quantity");
        var isFeatured = $(this).data("is-featured");
        var productStatus = $(this).data("product-status");
        var categoryId = $(this).data('category_id');
    
        // Set data into modal fields
        $('#editProductModal input[name="id"]').val(id);
        $('#editProductModal input[name="name"]').val(name);
        $('#editProductModal input[name="desc"]').val(desc);
        
        // Set content to TinyMCE
        if (tinymce.get('mytextarea')) {
            tinymce.get('mytextarea').setContent(details);
        } else {
            console.log("TinyMCE editor has not been initialized.");
        }
    
        $('#editProductModal input[name="price"]').val(price);
        $('#editProductModal input[name="stock_quantity"]').val(stockQuantity);
        $('#editProductModal input[name="is_featured"]').prop("checked", isFeatured == 1);
        $('#editProductModal select[name="product_status"]').val(productStatus);
        $('#editProductModal select[name="category_id"]').val(categoryId);
    
        $("#editProductModal").modal("show");
    });
    
});

// Khi người dùng nhấn vào nút upload
$("#upload-btn").on("click", function () {
    $("#fileManagerModal").modal("show");
});

// Cấu hình TinyMCE (nếu bạn cần dùng thêm các tính năng khác)
tinymce.init({
    selector: "textarea", // hoặc textarea của bạn
    plugins: "image",
    toolbar: "image",
    file_picker_callback: function (callback, value, meta) {
        let cmsURL =
            "/laravel-filemanager?editor=" + meta.fieldname + "&type=Images";

        tinymce.activeEditor.windowManager.openUrl({
            url: cmsURL,
            title: "Quản lý hình ảnh",
            width: 800,
            height: 600,
            onMessage: (api, message) => {
                callback(message.content);
            },
        });
    },
});

// save images
// Giả sử bạn đã có một sự kiện click cho hình ảnh
document.querySelectorAll(".file-item").forEach((item) => {
    item.addEventListener("click", function () {
        const imageUrl = this.getAttribute("data-image-url"); // Thay thế bằng thuộc tính thực tế chứa URL
        const fileName = this.getAttribute("data-file-name"); // Tương tự
        const fileSize = this.getAttribute("data-file-size"); // Tương tự

        // Gọi hàm selectImage khi hình ảnh được chọn
        selectImage(imageUrl, fileName, fileSize);
    });
});

//list images
document.getElementById("images").addEventListener("change", function (event) {
    const imagePreview = document.getElementById("image-preview");
    imagePreview.innerHTML = ""; // Xóa các ảnh trước đó nếu có

    Array.from(event.target.files).forEach((file) => {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.style.maxWidth = "150px"; // Giới hạn kích thước ảnh
            img.style.marginRight = "10px";
            imagePreview.appendChild(img); // Thêm ảnh vào div preview
        };
        reader.readAsDataURL(file);
    });
});
