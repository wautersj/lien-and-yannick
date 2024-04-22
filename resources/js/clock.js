import $ from 'jquery'
window.jQuery = window.$ = $

$(function () {
    var $section = $('.clock-section');

    if(!$section) {
        return;
    }

    var monthsLeft = null;
    var daysLeft = null;
    var hoursLeft = null;
    var minutesLeft = null;
    var secondsLeft = null;

    var transition = false;

    var targetDate = new Date('2024-09-21 12:30');
    var targetTime = targetDate.getTime();

    function calculate() {
        var currentDate = new Date();
        var currentTime = currentDate.getTime();

        var timeDifference = targetTime - currentTime;

        if (timeDifference <= 0) {
            // Target time has passed
            monthsLeft = 0;
            daysLeft = 0;
            hoursLeft = 0;
            minutesLeft = 0;
            secondsLeft = 0;
        } else {
            transition = true;

            // Calculate remaining time
            var seconds = Math.floor(timeDifference / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);
            var months = Math.floor(days / 30); // Assuming 30 days in a month for simplicity

            seconds %= 60;
            minutes %= 60;
            hours %= 24;
            days %= 30;

            if(monthsLeft !== months) {
                monthsLeft = months;
                $section.find('.months .num').text(monthsLeft);

                $section.find('.months .num').addClass('transition');
                setTimeout(function() {
                    $section.find('.months .num').removeClass('transition');
                }, 100);
            }

            if(daysLeft !== days) {
                daysLeft = days;
                $section.find('.days .num').text(daysLeft);

                $section.find('.days .num').addClass('transition');
                setTimeout(function() {
                    $section.find('.days .num').removeClass('transition');
                }, 100);
            }

            if(hoursLeft !== hours) {
                hoursLeft = hours;
                $section.find('.hours .num').text(hoursLeft);

                $section.find('.hours .num').addClass('transition');
                setTimeout(function() {
                    $section.find('.hours .num').removeClass('transition');
                }, 100);
            }

            if(minutesLeft !== minutes) {
                minutesLeft = minutes;
                $section.find('.minutes .num').text(minutesLeft);

                $section.find('.minutes .num').addClass('transition');
                setTimeout(function() {
                    $section.find('.minutes .num').removeClass('transition');
                }, 100);
            }

            if(secondsLeft !== seconds) {
                secondsLeft = seconds;
                $section.find('.seconds .num').text(secondsLeft);

                $section.find('.seconds .num').addClass('transition');
                setTimeout(function() {
                    $section.find('.seconds .num').removeClass('transition');
                }, 100);
            }

            // $section.find('.months .num').text(monthsLeft);
            // $section.find('.days .num').text(daysLeft);
            // $section.find('.hours .num').text(hoursLeft);
            // $section.find('.minutes .num').text(minutesLeft);
            // $section.find('.seconds .num').text(secondsLeft);

            if(monthsLeft == 1) {
                $section.find('.months .text.single').show();
                $section.find('.months .text.plural').hide();
            } else {
                $section.find('.months .text.single').hide();
                $section.find('.months .text.plural').show();
            }

            if(daysLeft == 1) {
                $section.find('.days .text.single').show();
                $section.find('.days .text.plural').hide();
            } else {
                $section.find('.days .text.single').hide();
                $section.find('.days .text.plural').show();
            }

            if(hoursLeft == 1) {
                $section.find('.hours .text.single').show();
                $section.find('.hours .text.plural').hide();
            } else {
                $section.find('.hours .text.single').hide();
                $section.find('.hours .text.plural').show();
            }

            if(minutesLeft == 1) {
                $section.find('.minutes .text.single').show();
                $section.find('.minutes .text.plural').hide();
            } else {
                $section.find('.minutes .text.single').hide();
                $section.find('.minutes .text.plural').show();
            }

            if(secondsLeft == 1) {
                $section.find('.seconds .text.single').show();
                $section.find('.seconds .text.plural').hide();
            } else {
                $section.find('.seconds .text.single').hide();
                $section.find('.seconds .text.plural').show();
            }
        }
    }

    setInterval(calculate, 1000);
    calculate();
});
