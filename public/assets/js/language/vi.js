window.CNV.language = {
  success: "Thành công",
  error: "Thất bại",
  warning: "Cảnh báo",
  yes: "Đồng ý",
  cancel: "Hủy bỏ",
  unknown_error: "Không thể xác định lỗi",
  internet_error:
    "Không xác định nguyên nhân, có thể do nhập liệu không đủ hoặc quá trình xử lý gặp sự cố !",
};
$.extend($.validator.messages, {
  required: "Trường này không được để trống",
  remote: "Hãy sửa cho đúng.",
  email: "Email không hợp lệ.",
  url: "URL không hợp lệ.",
  date: "Ngày không hợp lệ.",
  dateISO: "Trường này phải là ngày (ISO).",
  number: "Trường này phải là số.",
  digits: "Trường này phải là chữ số.",
  creditcard: "Trường này phải là số thẻ tín dụng.",
  equalTo: "Trường này phải nhập giống như trên.",
  extension: "Phần mở rộng không đúng.",
  maxlength: $.validator.format("Trường này phải từ {0} kí tự trở xuống."),
  minlength: $.validator.format("Trường này phải từ {0} kí tự trở lên."),
  rangelength: $.validator.format("Trường này phải từ {0} đến {1} kí tự."),
  range: $.validator.format("Trường này phải từ {0} đến {1}."),
  max: $.validator.format("Trường này phải từ {0} trở xuống."),
  min: $.validator.format("Trường này phải từ {1} trở lên."),
});
