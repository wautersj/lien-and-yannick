import $ from 'jquery'
window.jQuery = window.$ = $

$(function () {
    var $section = $('.clock-section');

    if(!$section) {
        return;
    }

    var targetDate = new Date('2024-09-21 10:00')
    var targetTime = targetDate.getTime();

    function calculate() {
        var currentDate = new Date();
        var currentTime = currentDate.getTime();

        var timeDifference = targetTime - currentTime;

        if (timeDifference <= 0) {
            // Target time has passed
            var monthsLeft = 0;
            var daysLeft = 0;
            var hoursLeft = 0;
            var minutesLeft = 0;
            var secondsLeft = 0;
        } else {
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

            var monthsLeft = months;
            var daysLeft = days;
            var hoursLeft = hours;
            var minutesLeft = minutes;
            var secondsLeft = seconds;

            $section.find('.months .num').text(monthsLeft);
            $section.find('.days .num').text(daysLeft);
            $section.find('.hours .num').text(hoursLeft);
            $section.find('.minutes .num').text(minutesLeft);
            $section.find('.seconds .num').text(secondsLeft);

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
