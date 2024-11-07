"use strict";
(function() {
    $(document).ready(function() {
        $(".tab-packages").each(function() {
            var i = $(this);
            $(i).find(".tab-prices .tab-price-item").each(function() {
                var k = $(this);
                var j = $(k).find(".price-range-slider");
                j.slider();
                j.on("slide slideStop slideStart", function(l) {
                    $(k).find(".number_employee").text(e(l.value));
                    $(k).find(".tooltip-inner").text(e(l.value));
                    c(k, l.value);
                    g(k)
                });
                $(k).find(".number_employee").text(e(j.val()));
                $(k).find(".tooltip-inner").text(e(j.val()));
                $(k).find(".data_check").on("change", function(l) {
                    l.preventDefault();
                    g(k)
                });
                $(k).find(".js_data_item").change(function() {
                    var m = $(this).parents(".tab-price-item").attr("id");
                    if (m == "start") {
                        var l = $(this).parents(".group_content_price_list_tab").attr("data-speacil");
                        if (l != undefined) {
                            if (l == "true") {
                                $(this).parents(".group_content_price_list_tab").find(".js_data_item").each(function() {
                                    var o = $(".start-ket-noi-api-nang-cao:not(:checked)");
                                    var n = $(".start-ket-noi-api-nang-cao:checked");
                                    if (n.length == 1) {
                                        $(".price." + n.attr("id")).html(e(10000000) + " đ");
                                        n.attr("data-price", 10000000);
                                        o.each(function(p, q) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    } else {
                                        n.each(function(p, q) {
                                            if (p == 0) {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            }
                                        });
                                        o.each(function(p, q) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    }
                                    if (n.length == 0) {
                                        o.each(function(p, q) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                })
                            }
                        }
                    }
                    if (m == "business" || m == "pro") {
                        var l = $(this).parents(".group_content_price_list_tab").attr("data-speacil");
                        if (l != undefined) {
                            if (l == "true") {
                                $(this).addClass("is_check");
                                $(this).parents("." + m + "_group_child_content_tab").find(".js_data_item").each(function() {
                                    var r = $("." + m + "_all-tich-hop-cong-thanh-toan:not(:checked)");
                                    var q = $("." + m + "_all-tich-hop-cong-thanh-toan:checked");
                                    if (q.length == 1) {
                                        $(".price." + q.attr("id")).html(e(10000000) + " đ");
                                        q.attr("data-price", 10000000);
                                        r.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    } else {
                                        q.each(function(x, y) {
                                            if (x == 0) {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            }
                                        });
                                        r.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    }
                                    if (q.length == 0) {
                                        r.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                    var v = $("." + m + "_all-tich-hop-cong-giao-van:not(:checked)");
                                    var n = $("." + m + "_all-tich-hop-cong-giao-van:checked");
                                    if (n.length == 1) {
                                        $(".price." + n.attr("id")).html(e(7000000) + " đ");
                                        n.attr("data-price", 7000000);
                                        v.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    } else {
                                        n.each(function(x, y) {
                                            if (x == 0) {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            }
                                        });
                                        v.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    }
                                    if (n.length == 0) {
                                        v.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                    var p = $("." + m + "_all-tich-hop-web:not(:checked)");
                                    var s = $("." + m + "_all-tich-hop-web:checked");
                                    if (s.length == 1) {
                                        $(".price." + s.attr("id")).html(e(10000000) + " đ");
                                        s.attr("data-price", 10000000);
                                        p.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    } else {
                                        s.each(function(x, y) {
                                            if (x == 0) {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                                $(this).attr("data-price", 10000000)
                                            }
                                        });
                                        p.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(10000000) + " đ");
                                            $(this).attr("data-price", 10000000)
                                        })
                                    }
                                    if (s.length == 0) {
                                        p.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                    var u = $("." + m + "_all-tich-hop-sms-marketing:not(:checked)");
                                    var w = $("." + m + "_all-tich-hop-sms-marketing:checked");
                                    if (w.length == 1) {
                                        $(".price." + w.attr("id")).html(e(7000000) + " đ");
                                        w.attr("data-price", 7000000);
                                        u.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    } else {
                                        w.each(function(x, y) {
                                            if (x == 0) {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            }
                                        });
                                        u.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    }
                                    if (w.length == 0) {
                                        u.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                    var o = $("." + m + "_all-tich-hop-call-center:not(:checked)");
                                    var t = $("." + m + "_all-tich-hop-call-center:checked");
                                    if (t.length == 1) {
                                        $(".price." + t.attr("id")).html(e(7000000) + " đ");
                                        t.attr("data-price", 7000000);
                                        o.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    } else {
                                        t.each(function(x, y) {
                                            if (x == 0) {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            } else {
                                                $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                                $(this).attr("data-price", 7000000)
                                            }
                                        });
                                        o.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(7000000) + " đ");
                                            $(this).attr("data-price", 7000000)
                                        })
                                    }
                                    if (t.length == 0) {
                                        o.each(function(x, y) {
                                            $(".price." + $(this).attr("id")).html(e(0) + " đ");
                                            $(this).attr("data-price", 0)
                                        })
                                    }
                                })
                            }
                        }
                    }
                    f(k);
                    g(k)
                });
                f(k);
                c(k, j.val());
                g(k)
            })
        })
    });

    function e(i) {
        i = i ? i.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") : 0;
        return i
    }
    var c = function(k, m) {
        var i;
        var l = 20000;
        m = m || 0;
        var j = parseInt(m) - l;
        switch (j) {
            case -10000:
                i = {
                    number_user: 0,
                    price_number_user: 0,
                    price_month: 83
                };
                break;
            case 10000:
                i = {
                    number_user: j,
                    price_number_user: 10000000,
                    price_month: 83
                };
                break;
            case 20000:
                i = {
                    number_user: j,
                    price_number_user: 18500000,
                    price_month: 80
                };
                break;
            case 30000:
                i = {
                    number_user: j,
                    price_number_user: 26000000,
                    price_month: 77
                };
                break;
            case 40000:
                i = {
                    number_user: j,
                    price_number_user: 32500000,
                    price_month: 73
                };
                break;
            case 50000:
                i = {
                    number_user: j,
                    price_number_user: 38000000,
                    price_month: 69
                };
                break;
            case 60000:
                i = {
                    number_user: j,
                    price_number_user: 42500000,
                    price_month: 65
                };
                break;
            case 70000:
                i = {
                    number_user: j,
                    price_number_user: 46000000,
                    price_month: 61
                };
                break;
            case 80000:
                i = {
                    number_user: j,
                    price_number_user: 48500000,
                    price_month: 53
                };
                break;
            default:
                i = {
                    number_user: j,
                    price_number_user: 0,
                    price_month: 83
                }
        }
        a(k, i);
        d(k, i)
    };
    var d = function(j, i) {
        var l = $(j).find(".load-template-number-user");
        var n = '<input type="hidden" name="number_user_phat_sinh" value="__NUMBER_USER_PHAT_SINH__"><input type="hidden" name="total_price_number_user_phat_sinh" value="__TOTAL_PRICE_NUMBER_USER__PHAT_SINH__"><input type="hidden" name="price_month_number_phat_sinh" value="__PRICE_MONTH_NUMBER_PHAT_SINH__">';
        var k = [];
        var m = n.replace(/__NUMBER_USER_PHAT_SINH__/g, i.number_user);
        m = m.replace(/__TOTAL_PRICE_NUMBER_USER__PHAT_SINH__/g, 0);
        m = m.replace(/__PRICE_MONTH_NUMBER_PHAT_SINH__/g, i.price_month);
        k.push(m);
        l.html(k.join("\n"))
    };
    var a = function(l, i) {
        var j = $(l).find(".js-data-list-charge");
        var k = $("#maintenanceFee").html();
        var m = [];
        var n = k.replace(/__NUMBER_USER__/g, e(i.number_user));
        if (i.price_number_user > 0) {
            n = n.replace(/__PRICE_NUMBER_USER__/g, "<strike>" + e(i.price_number_user) + " đ</strike>")
        } else {
            n = n.replace(/__PRICE_NUMBER_USER__/g, e(i.price_number_user) + " đ")
        }
        n = n.replace(/__PRICE_MONTH__/g, e(i.price_month) + " đ");
        n = n.replace(/__PRICE_GENERATE__/g, 0);
        m.push(n);
        j.html(m.join("\n"))
    };
    var h = function(m, k) {
        var j = $(m).find(".load-template-info");
        var l = '<input type="hidden" name="info_app[]" value="__INFO_APP__"><input type="hidden" id="template_price_data___ID__" name="price_app[]" value="__PIRCE_APP__">';
        var i = [];
        k.forEach(function(n) {
            var o = l.replace(/__INFO_APP__/g, n.title);
            o = o.replace(/__PIRCE_APP__/g, n.price);
            o = o.replace(/__ID__/g, n.id_element);
            i.push(o)
        });
        j.html(i.join("\n"))
    };
    var b = function(m, k) {
        var i = $(m).find(".js-data-list-prices");
        var n = '<h2 class="title_show_data">Phí khởi tạo</h2>';
        var l = '<div class="content_box content_box_data"><div class="box_name box_name_data">__NAME__</div><div class="box_price box_price_data box_price_generate" data-price="__PRICE_GENERATE__" id="box_price_data___ID__">__PRICE__ đ</div></div>';
        var j = [];
        k.forEach(function(o) {
            var p = l.replace(/__NAME__/g, o.title);
            p = p.replace(/__PRICE__/g, e(o.price));
            p = p.replace(/__ID__/g, o.id_element);
            p = p.replace(/__PRICE_GENERATE__/g, o.price);
            j.push(p)
        });
        i.html(n + j.join("\n"))
    };
    var f = function(k) {
        var j = [];
        var i = $(k).find(".js_data_item:checked");
        if (i.length > 0) {
            var n = 10000;
            var l = parseInt($(k).find(".price-range-slider").val());
            var m = Math.ceil(l / n);
            m = m <= 0 ? 1 : m;
            i.each(function(o, p) {
                j.push({
                    title: $(p).val(),
                    id_element: $(p).attr("id"),
                    price: $(p).attr("data-price")
                })
            });
            b(k, j);
            h(k, j)
        }
    };
    var g = function(i) {
        var j = 0;
        $(i).find(".box_price_generate").each(function(k, l) {
            j = j + parseInt($(this).attr("data-price"))
        });
        $(i).find(".box_price_first").html(e(j) + " đ");
        $(i).find(".box_price_payment").html(e(j) + " đ");
        $(i).find(".total_price_form").attr("value", j);
        $(i).find(".total_price_payment_form").attr("value", j)
    }
})();
