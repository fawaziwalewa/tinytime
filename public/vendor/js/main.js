$(document).ready(function () {
    "use strict";
    $(document).on("click", "#send_news", function (e) {
        e.preventDefault();
        $("#submit i").removeClass(
            "fi flaticon-check"
        );
        $("#submit i").addClass(
            "fa fa-spinner fa-spin"
        );
        $.ajax({
            url: "/subscribers",
            type: "post",
            data: $("#news").serialize(),
            success: function (data) {
                $("#submit i").addClass(
                    "fi flaticon-check"
                );
                $(
                    "#submit i"
                ).removeClass("fa fa-spinner fa-spin");
                $(".success_msg").html(
                    "<p class='mt-2 text-green-500 font-bold cursor-pointer removeElem'><strong>Your Request was successfully sent.</strong> Thank you!</p>"
                );
                $('#input').val("");
            },
            error: function (xhr, err) {
                var err = eval("(" + xhr.responseText + ")");
                $("#submit i").addClass(
                    "fi flaticon-check"
                );
                $(
                    "#submit i"
                ).removeClass("fa fa-spinner fa-spin");
                $(".success_msg").html(
                    "<p class='mt-2 text-red-500 font-bold cursor-pointer removeElem'>Oops!! " +
                        err.message +
                        "</p>"
                );
                $('#input').val("");
            },
        });
        return false;
    });
    $(document).on("click", ".removeElem", function (e) {
        $(this).remove();
    });
});

(function ($) {
    "use strict";

    /* Demo Slideshow */

    $("#slideshow > div:gt(0)").hide();
    var wait = false;
    setInterval(function () {
        if (wait) {
            wait = false;
            return false;
        }
        $(".tab-pane").fadeOut();
        var active = $(".tab-pane.active");
        var id = active.next().attr("id");
        if (active.is(":last-child")) {
            active.removeClass("active");
            $(".tab-pane:first-child").addClass("active").fadeIn();
            id = $(".tab-pane:first-child").attr("id");
        } else {
            active.removeClass("active").next().addClass("active").fadeIn();
        }
        $(".tab-nav").children().removeClass("active");
        $('a[href="#' + id + '"]')
            .parent("li")
            .addClass("active");
    }, 5000);

    $(document).on("click", ".tab-nav a", function (e) {
        var $_this = $(this);
        var id = $_this.attr("href").split("#");
        $(".tab-pane").fadeOut();
        $("#" + id[1])
            .addClass("active")
            .fadeIn();
        $_this.addClass("active");
        wait = true;
    });

    $(".countdown").ClassyCountdown({
        theme: "flat-colors",
        end: "" /*$.now() + 300  + sec */,
        labelsOptions: {
            lang: {
                days: "DAYS",
                hours: "hours",
                minutes: "mins",
                seconds: "secs",
            },
            style: "font-size:10px; text-transform:uppercase; font-family: Roboto; font-weight: 400;",
        },
        style: {
            days: {
                gauge: {
                    thickness: 0.22,
                    bgColor: "rgba(22, 34, 0, 0.8)",
                    fgColor: "#a4ff00",
                    fgLast: "#bafc00",
                    lineCap: "round",
                },
                textCSS:
                    "font-family:'Roboto';font-weight:400;color:#fff;font-size: 60px;",
            },
            hours: {
                gauge: {
                    thickness: 0.22,
                    bgColor: "rgba(12, 40, 40, .8)",
                    fgColor: "#65f9ed",
                    fgLast: "#24cad9",
                    lineCap: "round",
                },
                textCSS:
                    "font-family:'Roboto';font-weight:400;color:#fff;font-size: 60px;",
            },
            minutes: {
                gauge: {
                    thickness: 0.22,
                    bgColor: "rgba(52, 9, 20, .8)",
                    fgColor: "#ff1415",
                    fgLast: "#fd08a8",
                    lineCap: "round",
                },
                textCSS:
                    "font-family:'Roboto';font-weight:400;color:#fff;font-size: 60px;",
            },
            seconds: {
                gauge: {
                    thickness: 0.22,
                    bgColor: "rgba(39, 28, 1, .8)",
                    fgColor: "#ffbf00",
                    fgLast: "#ff6e00",
                    lineCap: "round",
                },
                textCSS:
                    "font-family:'Roboto';font-weight:400;color:#fff;font-size: 60px;",
            },
        },
    });

    /* Open Modal */
    $(document).on("click", ".page-link", function (e) {
        e.preventDefault();
        var target = $(this).attr("href");

        $("body").addClass("hidden");

        $(target)
            .removeClass("fadeOutUp")
            .addClass("fadeInDown")
            .css("visibility", "visible");
        $("#home").addClass("blur");
    });

    /* Closing Modal */
    $(document).on("click", ".closeModal", function (e) {
        e.preventDefault();
        $("#home").removeClass("blur");
        $(this)
            .parents(".otherpage")
            .removeClass("fadeInDown")
            .addClass("fadeOutUp")
            .css("visibility", "hidden");
        $("body").removeClass("hidden");
    });

    $(document).on("keyup", "#input", function (e) {
        $('.success_msg').html("");
        var pattern = new RegExp(
            /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i
        );
        if (!pattern.test($(this).val())) {
            // $("#submit").removeClass("success").addClass("error");
            $("#error").removeClass("hidden").addClass("block");
        } else {
            // $("#submit").removeClass("error").addClass("success");
            $("#error").removeClass("block").addClass("hidden");
        }
    });

    $(".sun").on("click", function () {
        $(this).addClass("hidden");
        $(".moon").removeClass("hidden");
        $("body").addClass("bg-white");
        $("body").removeClass("bg-black");
        $("#bgvid").addClass("hidden");
    });
    $(".moon").on("click", function () {
        $(this).addClass("hidden");
        $(".eclipse.video").removeClass("hidden");
        $("body").removeClass("bg-white");
        $("body").addClass("bg-black");
    });
    $(".eclipse.video").on("click", function () {
        $(this).addClass("hidden");
        $(".sun").removeClass("hidden");
        $("body").removeClass("bg-black");
        $("body").addClass("bg-black bg-video");
        $("#bgvid").removeClass("hidden");
    });
    // Modal Boxes
    $("#custom").on("click", function () {
        $(".customModal").removeClass("hidden");
    });
    $("#share").on("click", function () {
        $(".shareModal").removeClass("hidden");
    });
    $("#sign").on("click", function () {
        $(".signModal").removeClass("hidden");
    });
    $(".close-modal").on("click", function () {
        $(".shareModal").addClass("hidden");
        $(".customModal").addClass("hidden");
        $(".signModal").addClass("hidden");
    });
    // Sign Form
    $('.signInBtn').click(function (e) { 
        e.preventDefault();
        $(this).removeClass('bg-gray-50');
        $('.signUpBtn').addClass('bg-gray-50');
        $(this).addClass('bg-white');
        $('.signup').addClass('hidden');
        $('.signin').removeClass('hidden');
    });
    $('.signUpBtn').click(function (e) { 
        e.preventDefault();
        $(this).removeClass('bg-gray-50');
        $('.signInBtn').addClass('bg-gray-50');
        $(this).addClass('bg-white');
        $('.signin').addClass('hidden');
        $('.signup').removeClass('hidden');
    });
    
    /* Subscription controls */
    $('.btn-free').click(function (e) { 
        e.preventDefault();
        $('.free').removeClass('hidden');
        $('.premium').addClass('hidden');
        $('.lifetime').addClass('hidden');
    });
    $('.btn-premium').click(function (e) { 
        e.preventDefault();
        $('.premium').removeClass('hidden');
        $('.free').addClass('hidden');
        $('.lifetime').addClass('hidden');
    });
    $('.btn-lifetime').click(function (e) { 
        e.preventDefault();
        $('.lifetime').removeClass('hidden');
        $('.free').addClass('hidden');
        $('.premium').addClass('hidden');
    });
    $('.btn-switch-p').click(function (e) { 
        e.preventDefault();
        $('.btn-switch-p').removeClass('bg-thanks-giving-secondary');
        $('.btn-switch-p').removeClass('text-thanks-giving-primary');
        $('.btn-switch-p').addClass('text-thanks-giving-secondary');
        $(this).addClass('bg-thanks-giving-secondary');
        $(this).addClass('text-thanks-giving-primary');
    });
})(jQuery);
