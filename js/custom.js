$(document).ready(function () {
"use strict";
    //Progress-bar
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
    });
    $(window).scroll(function () {
        // if($( window ).scrollTop() > 10){   scroll down abit and get the action
        $(".progress-bar").each(function () {

            var each_bar_width = $(this).attr('aria-valuenow');
            $(this).width(each_bar_width + '%');
        });
        //  }
    });

    //Home Filter Gallery
    $(function () {
        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.total, .event, .vol, .photo, .donate, .people'
                    }
                });

            }

        };
        // Run the show!
        filterList.init();
    });

    //Animation
    $(function () {

        var $elems = $('.animateblock');

        var winheight = $(window).height();

        var fullheight = $(document).height();


        $(window).scroll(function () {

            animate_elems();

        });


        function animate_elems() {

            var wintop = $(window).scrollTop(); // calculate distance from top of window


            // loop through each item to check when it animates

            $elems.each(function () {

                var $elm = $(this);


                if ($elm.hasClass('animated')) {
                    return true;
                } // if already animated skip to the next item


                var topcoords = $elm.offset().top; // element's distance from top of page in pixels


                if (wintop > (topcoords - (winheight * .75))) {

                    // animate when top of the window is 3/4 above the element

                    $elm.addClass('animated');

                }

            });

        } // end animate_elems()

    });

    //Progress bar
    $(function () {

        $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');

    });
    $(window).scroll(function () {
        // if($( window ).scrollTop() > 10){   scroll down abit and get the action
        $(".progress-bar").each(function () {

            var each_bar_width = $(this).attr('aria-valuenow');
            $(this).width(each_bar_width + '%');
        });
        //  }

    });

    //Product Qty
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


    //Countdown

    $("#DateCountdown, #DateCountdown2, #DateCountdown3").TimeCircles();

    $("#CountDownTimer").TimeCircles({time: {Days: {show: false}, Hours: {show: false}}});

    $("#PageOpenTimer").TimeCircles();


    var updateTime = function () {

        var date = $("#date").val();

        var time = $("#time").val();

        var datetime = date + ' ' + time + ':00';

        $("#DateCountdown").data('date', datetime).TimeCircles().start();

    }

    $("#date").change(updateTime).keyup(updateTime);

    $("#time").change(updateTime).keyup(updateTime);


// Start and stop are methods applied on the public TimeCircles instance

    $(".startTimer").click(function () {

        $("#CountDownTimer").TimeCircles().start();

    });

    $(".stopTimer").click(function () {

        $("#CountDownTimer").TimeCircles().stop();

    });

// Fade in and fade out are examples of how chaining can be done with TimeCircles

    $(".fadeIn").click(function () {

        $("#PageOpenTimer").fadeIn();

    });

    $(".fadeOut").click(function () {

        $("#PageOpenTimer").fadeOut();

    });
    $("#DateCountdown, #DateCountdown2, #DateCountdown3").TimeCircles({circle_bg_color: "#666666"});
    $("#DateCountdown, #DateCountdown2, #DateCountdown3").TimeCircles({
        time: {
            Days: {color: "#1abc9c"},
            Hours: {color: "#1abc9c"},
            Minutes: {color: "#1abc9c"},
            Seconds: {color: "#1abc9c"}
        }
    });

    $("#DateCountdown4").TimeCircles();

    $("#CountDownTimer").TimeCircles({time: {Days: {show: false}, Hours: {show: false}}});

    $("#PageOpenTimer").TimeCircles();

    var updateTime = function () {

        var date = $("#date").val();

        var time = $("#time").val();

        var datetime = date + ' ' + time + ':00';

        $("#DateCountdown").data('date', datetime).TimeCircles().start();

    }

    $("#date").change(updateTime).keyup(updateTime);

    $("#time").change(updateTime).keyup(updateTime);


// Start and stop are methods applied on the public TimeCircles instance

    $(".startTimer").click(function () {

        $("#CountDownTimer").TimeCircles().start();

    });

    $(".stopTimer").click(function () {

        $("#CountDownTimer").TimeCircles().stop();

    });

// Fade in and fade out are examples of how chaining can be done with TimeCircles

    $(".fadeIn").click(function () {

        $("#PageOpenTimer").fadeIn();

    });

    $(".fadeOut").click(function () {

        $("#PageOpenTimer").fadeOut();

    });

    $("#DateCountdown4").TimeCircles({circle_bg_color: "#666666"});

    $("#DateCountdown4").TimeCircles({
        time: {

            Days: {color: "#efce4a"},

            Hours: {color: "#efce4a"},

            Minutes: {color: "#efce4a"},

            Seconds: {color: "#efce4a"}

        }
    });
    
    // BEGIN PLACE LOADING ICON IN THE MIDDLE OF THE PAGE
    jQuery(window).on('resize', function () {
        resizenow();
    });
    function resizenow() {
        var browserwidth = jQuery(window).width();
        var browserheight = jQuery(window).height();
        jQuery('.bonfire-pageloader-icon').css('right', ((browserwidth - jQuery(".bonfire-pageloader-icon").width()) / 2)).css('top', ((browserheight - jQuery(".bonfire-pageloader-icon").height()) / 2));
    };
    resizenow();
})