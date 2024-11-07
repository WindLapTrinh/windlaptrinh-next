'use strict';

var Main = function() {
    /* UI Intialize */
    var UIInit =  function () {
        // Initialize Chosen
        $('.select-chosen').chosen({width: "100%"});

        // Initialize Select2
        $('select:not(.non-select2)').select2();

        // Initialize Bootstrap Colorpicker
        $('.input-colorpicker').colorpicker({format: 'hex'});
        $('.input-colorpicker-rgba').colorpicker({format: 'rgba'});

        // Initialize Slider for Bootstrap
        $('.input-slider').slider();

        // Initialize Tags Input
        $('.input-tags').tagsInput({ width: 'auto', height: 'auto'});

        // Initialize Datepicker
        $('.input-datepicker, .input-daterange').datepicker({format: 'dd-mm-yyyy'});
        $('.input-datepicker-close').datepicker({weekStart: 1}).on('changeDate', function(e){ $(this).datepicker('hide'); });

        // Initialize Timepicker
        $('.input-timepicker').timepicker({minuteStep: 1,showSeconds: false,showMeridian: true});
        $('.input-timepicker24').timepicker({minuteStep: 1,showSeconds: false,showMeridian: false});

        // Easy Pie Chart
        $('.pie-chart').easyPieChart({
            barColor: $(this).data('bar-color') ? $(this).data('bar-color') : '#777777',
            trackColor: $(this).data('track-color') ? $(this).data('track-color') : '#eeeeee',
            lineWidth: $(this).data('line-width') ? $(this).data('line-width') : 3,
            size: $(this).data('size') ? $(this).data('size') : '80',
            animate: 800,
            scaleColor: false
        });

        // Initialize tabs
        $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e){ e.preventDefault(); $(this).tab('show'); });

        // Initialize Tooltips
        $('[data-toggle="tooltip"], .enable-tooltip').tooltip({container: 'body', animation: false});

        // Initialize Popovers
        $('[data-toggle="popover"], .enable-popover').popover({container: 'body', animation: true});

        // Initialize single image lightbox
        $('[data-toggle="lightbox-image"]').magnificPopup({type: 'image', image: {titleSrc: 'title'}});

        // Initialize image gallery lightbox
        $('[data-toggle="lightbox-gallery"]').each(function(){
            $(this).magnificPopup({
                delegate: 'a.gallery-link',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    arrowMarkup: '<button type="button" class="mfp-arrow mfp-arrow-%dir%" title="%title%"></button>',
                    tPrev: 'Previous',
                    tNext: 'Next',
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
                },
                image: {titleSrc: 'title'}
            });
        });


        // Initialize Placeholder
        $('input, textarea').placeholder();

        // auto add class active sibebar
        $('.sidebar-nav a').each(function(e){
            var item = $(this);
            if(window.location.href.replace(CNV.baseUrl, '') === item.attr('href')) {
                item.addClass('active');
                if(item.parent().parent().parent().is('li')) {
                    item.parent().parent().show();
                    item.parent().parent().parent().children('a').addClass('open');
                }
            }
        });
    }
    /* Toastr init */
    var toastrInit = function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    };

    /**
     * Ajax form
     */
    var ajaxFormInit = function () {
        validationInit();
        var form = $('.form-validate');
        form.each(function (e) {
            var o = this;
            var b = $(this);
            var validator = b.validate();
            var btn = b.find('[type="submit"], button.btn-primary');
            b.data('validator', validator);
            b.ajaxForm({
                dataType:  'json',
                beforeSerialize:function(form, options){

                },
                beforeSubmit:function() {
                    //btn.button('loading');
                },
                success: function(data) {
                    btn.button('reset');
                    if(data) {
                        if(data.status == 200){
                            toastr.success(data.message, CNV.language.success);
                            /*if(data.link_redirect == 'true'){
                                 window.open("https://www.socialloyalty.vn/?utm_source=webchinh&utm_campaign=popup", "_blank")
                            }*/
                            /*if(data.file_pdf){
                                sessionStorage.setItem('user_name',data.user_name);
                                sessionStorage.setItem('user_email',data.user_email);
                                sessionStorage.setItem('user_phone',data.user_phone);
                                sessionStorage.setItem('check_download',data.check_download);
                                window.location.href = data.file_pdf;
                            }*/

                            /*if(data.link_redirect && data.link_file){
                                window.open(data.link_file, '_blank');
                                window.location.href = data.link_file;
                            }*/


                            if(b.is('[data-callback]') && typeof eval(b.data('callback')) === 'function' ){
                                eval(b.data('callback'))(b,data);
                            } else {
                                b[0].reset();
                            }

                        } else if(data.status == 500) {
                            toastr.warning(data.message, CNV.language.warning);
                        } else {
                            toastr.error(CNV.language.unknown_error, CNV.language.error);
                        }
                    }else{
                        toastr.error(CNV.language.internet_error,mes.error);
                    }
                },
                error: function(response){
                    btn.button('reset');
                    if(response.status == 422) {
                        var errors = response.responseJSON;
                        var text = "";
                        $.each(errors, function(index, value) {
                            text += value[0]+"<br />";
                        });
                        toastr.error(text, CNV.language.error);
                    }else{
                        toastr.error(CNV.language.internet_error, CNV.language.error);
                    }
                }
            })
        });

        //fix for validation required select2
        $(document).on('change','.select-select2', function () {
            $(this).trigger('blur');
        });
    };

    var validationInit = function () {
        if (!$.isFunction($.fn.validate)) {
            return;
        }

        $.validator.setDefaults({
            errorClass: 'help-block animation-slideDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                e.parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                $(e).closest('.help-block').remove();
            },
            success: function(e) {
                e.closest('.form-group').removeClass('has-success has-error');
                e.closest('.help-block').remove();
            }
        });
    };

    var ajaxInit = function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                NProgress.start();
            },
            complete: function() {
                NProgress.done();
            }
        });
    };

    var dataAction = function () {
        $(document).on('click', '[data-action]', function(event) {
            var btn = $(this);

            if(typeof eval(btn.data('action')) === 'function' ){
                return eval(btn.data('action'))(event, btn);
            }
        });
    }


    return {
        init: function () {
            UIInit(); // UI Initialize
            toastrInit(); // Initialize toastr
            ajaxInit(); // CSRF setup
            ajaxFormInit(); // Initialize form
            dataAction(); // auto load button
        }
    }
}

Main().init();

/**
 * confirm button
 */
var activation = function (event, btn) {
    event.preventDefault();
    // btn.button('loading');
    $.ajax({
        url: btn.data('url'),
        method: 'GET',
        dataType: 'JSON',
        data: {},
        success: function (data) {
            if(data.status == 200) {
                toastr.success(data.message, CNV.language.success)
                TablesDatatables.table._fnAjaxUpdate();
            } else {
                toastr.warning(data.message, CNV.language.warning)
            }
        }
    });
}

var confirm_to_delete = function (event, btn) {
    event.preventDefault();

    var response = {
        status: 400,
        message: CNV.language.internet_error
    };

    swal({
        title: CNV.language.warning,
        text: btn.data('message'),
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: CNV.language.yes,
        cancelButtonText: CNV.language.cancel,
        showLoaderOnConfirm: true,
        preConfirm: function (confirm) {
            return new Promise(function (resolve, reject) {
                $.ajax({
                    url: btn.data('url'),
                    method: 'POST',
                    dataType: 'JSON',
                    data: {_method: 'DELETE'},
                    success: function (data) {
                        response = data;
                    },
                    complete: function (data) {
                        resolve();
                    }
                });
            })
        },
        allowOutsideClick: false
    }).then(function () {
        if(response.status == 200) {
            toastr.success(response.message, CNV.language.success);
            if(btn.is('[data-callback]') && typeof eval(btn.data('callback')) === 'function' ){
                eval(btn.data('callback'))(btn,response);
            } else {
                TablesDatatables.table._fnAjaxUpdate();
            }
        } else if(response.status == 500) {
            toastr.warning(response.message, CNV.language.warning);
        } else {
            toastr.error(CNV.language.unknown_error, CNV.language.error);
        }
    })
}

/**
 * Callback global
 */
var nothing_to_do = function (form, data) {
    return;
};

var reload_page = function (form, data) {
    setTimeout(function () {
        window.location.reload();
    }, 1000);
};

var redirect_to = function (form, data) {
    setTimeout(function () {
        window.location.href = data.redirect_url ? data.redirect_url : CNV.baseUrl;
    }, 1000);
};

var submitForm = function (element) {
    $(element).submit();
};

var submitFormAndCreate = function (element) {
    $('[name=create_after_save]').val(1);
    $(element).submit();
};


var loadDistricts = function(provinceSelected){
    var districtSelected = $('[data-toggle="district"]').val();
    var loadWards = function() {
        var wardSelected = $('[data-toggle="ward"]').val();
        $.get(CNV.baseUrl + '/api/wards.json?form&district=' + districtSelected +'&wardSelected=' + wardSelected , function (data) {
            $('select[name=ward]').html(data);
        });
    }

    $.get(CNV.baseUrl + '/api/districts.json?form&province=' + provinceSelected +'&districtSelected='+ districtSelected, function (data) {
        $('select[name=district]').html(data);

        loadWards();
    });
}

// var loadLocation = function () {
//     var provinceSelected = $('[data-toggle="province"]').val();

//     $.get(CNV.baseUrl + '/api/provinces.json?form&provinceSelected='+provinceSelected, function (data) {
//         $('select[name=province]').html(data);

//         // Load district selected
//         loadDistricts(provinceSelected);
//     });

//     $('select[name=province]').change(function(){
//         var val = $(this).val();
//         if (val != '') {
//             $.get(CNV.baseUrl + '/api/districts.json?form&province=' + val , function (data) {
//                 $('select[name=district]').html(data);
//             });
//         } else {
//             $('select[name=district]').html('<option value="N/A">Quáº­n/Huyá»‡n</option>');
//             $('select[name=ward]').html('<option value="N/A">PhÆ°á»ng/XĂ£</option>');
//         }
//     });

//     $('select[name=district]').change(function(){
//         var val = $(this).val();
//         if (val != '') {
//             $.get(CNV.baseUrl + '/api/wards.json?form&district=' + val , function (data) {
//                 $('select[name=ward]').html(data);
//             });
//         } else {
//             $('select[name=ward]').html('<option value="N/A">PhÆ°á»ng/XĂ£</option>');
//         }
//     });
// }

// var loadLocationShipping = function () {
//     $.get(CNV.baseUrl + '/api/provinces.json?form', function (data) {
//         $('select[name=shipping_province]').html(data);

//     });

//     $('select[name=shipping_province]').change(function(){
//         var val = $(this).val();
//         if (val != '') {
//             $.get(CNV.baseUrl + '/api/districts.json?form&province=' + val , function (data) {
//                 $('select[name=shipping_district]').html(data);
//             });
//         } else {
//             $('select[name=shipping_district]').html('<option value="N/A">Quáº­n/Huyá»‡n</option>');
//             $('select[name=shipping_ward]').html('<option value="N/A">PhÆ°á»ng/XĂ£</option>');
//         }
//     });

//     $('select[name=shipping_district]').change(function(){
//         var val = $(this).val();
//         if (val != '') {
//             $.get(CNV.baseUrl + '/api/wards.json?form&district=' + val , function (data) {
//                 $('select[name=shipping_ward]').html(data);
//             });
//         } else {
//             $('select[name=shipping_ward]').html('<option value="N/A">PhÆ°á»ng/XĂ£</option>');
//         }
//     });
// }


var slugify = function(str) {
    str = str.toString().toLowerCase();
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    str = str.replace(/([^0-9a-z-\s])/g, '');
    str = str.replace(/(\s+)/g, '-');
    str = str.replace(/^-+/g, '');
    str = str.replace(/-+$/g, '');

    return str;
};

var number_format = function(money, currency){
    currency = currency || '₫';

    return money.toFixed(0).replace('.', ',').replace(/./g, function(c, i, a) {
        return i && c !== "," && ((a.length - i) % 3 === 0) ? '.' + c : c;
    }) + ' ' + currency;
};

// $(document).ready(function() {
//     loadLocation();
//     loadLocationShipping();
// });

var toggleThisElement = function(element) {
    $(element).toggle();
}
