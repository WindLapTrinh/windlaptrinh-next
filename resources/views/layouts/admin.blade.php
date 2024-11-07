<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <title>Wind Lập Trình</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/whxvxved7yokt3y3vg4287at086agkhd6tujkl6jumjy6iwy/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "http://localhost/project-2024/wind-e-commerce/website/public/",
            selector: "#mytextarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,

            // Đường dẫn upload hình ảnh
            images_upload_url: "{{ route('upload.route.name') }}",

            // Handler upload hình ảnh
            images_upload_handler: function(blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = true;

                // Thêm CSRF token vào header
                xhr.open('POST', "{{ route('upload.route.name') }}");
                xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content'));

                xhr.onload = function() {
                    if (xhr.status < 200 || xhr.status >= 300) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    var json;

                    try {
                        json = JSON.parse(xhr.responseText);
                    } catch (e) {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.location);
                };

                // Tạo đối tượng FormData để gửi hình ảnh
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            },

            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                // Mở cửa sổ file manager
                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }

        };
        tinymce.init(editor_config);
    </script>
</head>

<body>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light bg-white d-flex">
            <div class="navbar-brand"><a class="brand-name" href="{{ url('admin') }}">Wind Lập Trình</a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('admin/post/add') }}">Thêm bài viết</a>
                        <a class="dropdown-item" href="{{ url('admin/product/add') }}">Thêm sản phẩm</a>
                        <a class="dropdown-item" href="{{ url('admin/order/add') }}">Thêm đơn hàng</a>
                    </div>
                </div>
                <div class="btn-group">
                    <a class="nav-link list-notify" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class=" badge-danger badge-counter">3</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Tài khoản</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav  -->
        @php
            $module_active = session('module_active');
        @endphp
        <div id="page-body" class="d-flex">
            <div id="sidebar">
                <div class="info-admin">
                    <img class="logo-admin" src="{{ asset('images/wind-app.png') }}" alt="Logo">
                    <div class="name-admin"><a class="brand-name" href="{{ url('admin') }}">Wind Lập Trình</a></div>
                </div>
                <ul id="sidebar-menu">
                    <li class="nav-link {{ $module_active == 'dashboard' ? 'active' : '' }}">
                        <a class="name-parent" href="{{ url('admin') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-chart-pie icon-parent-menu"></i>
                            </div>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="{{ url('admin/page/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-file-alt icon-parent-menu"></i>
                            </div>
                            Trang
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{ url('admin/page/add') }}">Thêm mới</a></li>
                            <li class="chilldent-menu-bottom"><a href="{{ url('admin/post/list') }}">Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="{{ url('admin/post/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-clipboard-list icon-parent-menu"></i>
                            </div>
                            Bài viết
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{ url('admin/post/add') }}">Thêm mới</a></li>
                            <li><a href="{{ url('admin/post/list') }}">Danh sách</a></li>
                            <li class="chilldent-menu-bottom"><a href="{{ url('category/post/list') }}">Danh mục</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="{{ route('admin.image.list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-camera icon-parent-menu"></i>
                            </div>
                            Hình ảnh
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="{{ url('admin/product/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-briefcase icon-parent-menu"></i>
                            </div>
                            Sản phẩm
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{ url('admin/product/list') }}">Danh sách</a>
                            </li>
                            <li class="chilldent-menu-bottom"><a href="{{ url('category/product/list') }}">Danh
                                    mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="{{ url('admin/order/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-shopping-cart icon-parent-menu"></i>
                            </div>
                            Bán hàng
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        {{-- <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{url('admin/product/list')}}">Đơn hàng</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-link {{ $module_active == 'user' ? 'active' : '' }}">
                        <a class="name-parent" href="{{ url('admin/user/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-user icon-parent-menu"></i>
                            </div>
                            Users
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{ url('admin/user/add') }}">Thêm mới</a></li>
                            <li class="chilldent-menu-bottom"><a href="{{ url('admin/user/list') }}">Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    {{-- @canany(['role.show', 'role.add', 'role.edit', 'role.delete']) --}}
                    <li class="nav-link">
                        <a class="name-parent" href="{{ url('admin/permission/add') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-user-lock icon-parent-menu"></i>
                            </div>
                            Phân quyền
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="{{ url('admin/permission/add') }}">Quyền</a></li>
                            <li><a href="{{ route('role.add') }}">Thêm vai trò</a></li>
                            <li class="chilldent-menu-bottom"><a href="{{ route('role.list') }}">Danh sách vai
                                    trò</a></li>
                        </ul>
                    </li>
                    {{-- @endcanany --}}

                    <li class="nav-link">
                        <a class="name-parent" href="#">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-cog icon-parent-menu"></i>
                            </div>
                            Hệ thống
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="">Tạo tài khoản</a></li>
                            <li class="chilldent-menu-bottom"><a href="">D.sách tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a class="name-parent" href="#">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-warehouse icon-parent-menu"></i>
                            </div>
                            Kho
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li class="chilldent-menu-top"><a href="">Hàng trong kho</a></li>
                            <li class="chilldent-menu-bottom"><a href="">Nhập sản phẩm</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div id="wp-content">
                @yield('content')
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {
            $('.accordion-toggle').click(function() {
                $(this).next().find('.accordian-body').collapse('toggle');
            });
        });
    </script>

    <script>
        var baseUrl = "{{ url('/') }}";
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/function.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
