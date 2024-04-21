import $ from 'jquery'
window.jQuery = window.$ = $

$(function() {
    var $animatedBlocks = [];

    function animation_init() {
        $animatedBlocks = $('.js-animated-block');

        scrollManager();

        $(window).on('scroll', function() {
            scrollManager();
        });

        window.__scrollManager = scrollManager;
    }

    function offset(el) {
        var rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }

    function scrollManager() {
        var scrollTop = getScrollTop();

        var toAnimate = [];

        $animatedBlocks.each(function(i,block) {
            var position = offset(block).top - scrollTop;
            var trigger = window.innerHeight/1.4;
            var firstTrigger = window.innerHeight - 100;
            var $block = $(block);

            if(position<trigger || ( i<=1 && position<firstTrigger && scrollTop<100 ) ) { //always render the first two blocks no matter what; so that we don't end up with whitespace under a header
                if(!$block.hasClass('animated') && !$block.hasClass('in-que')) {
                    toAnimate.push($block);
                }
            }
        });

        toAnimate.forEach(function($block, i) {
            var delay = i*300;

            if(scrollTop > 100) {
                delay = i*10;
            }

            activateBlock($block, delay);
        });
    }

    function getScrollTop() {
        return window.scrollY || document.body.scrollTop || document.documentElement.scrollTop;
    }

    function activateBlock($block, delay) {
        if(!$block.hasClass('animated')) {
            $block.addClass('in-que');

            setTimeout(function() {
                $block.addClass('animated');
                handleAnimatedBlock($block);
            }, delay);
        }
    }

    function handleAnimatedBlock(block) {
        var $block = $(block);
        var $blockGroups = $block.find('.js-animated-group');

        if($blockGroups.length) {
            $blockGroups.each(function(i,group) {
                handleAnimatedGroup(group);
            });
        } else {
            handleAnimatedGroup(block);
        }
    }

    function handleAnimatedGroup(group) {
        var $group = $(group);
        var $groupElements = $group.find('.js-animated-element');

        $groupElements.each(function(i,element) {
            handleAnimatedElement(element, i);
        });
    }

    function handleAnimatedElement(element, index) {
        var $element = $(element);

        setTimeout(function() {
            $element.removeClass('prepared');

            evaluateCountUp(element);
            evaluateChart(element);
        }, 120 * index);
    }

    function evaluateCountUp(element) {
        var $element = $(element);
        var $countUp = $element.find('.animate-count-up');

        if(!$countUp.length) {
        return;
        }

        countUp($countUp, 750);
    }

    function countUp($countUpEl, mimiseconds) {
        var $countValueEl = $countUpEl.find('.count-value');

        var value = Number($countValueEl.data('count-value'));
        var target = Number($countValueEl.data('count-target'));

        var step = target/(mimiseconds/10);
        var interval = Math.ceil(mimiseconds/(mimiseconds/10));

        value += step;

        if(value < target) {
            $countValueEl.html(Math.ceil(value));
            $countValueEl.data('count-value', value);
        } else {
            $countValueEl.html(target);
            showSuffix();
            return;
        }

        function showSuffix() {
            var $suffix = $countUpEl.find('.suffix');
            $suffix.addClass('shown');
        }

        requestAnimationFrame(function() {
            setTimeout(function() {
                countUp($countUpEl, mimiseconds);
            },interval);
        });
    }

    function evaluateChart(element) {
        if($(element).hasClass('js-chart-type-xy')) {
            window.__buildXyChart(element);
        } else if($(element).hasClass('js-chart-type-pie')) {
            window.__buildPieChart(element);
        }
    }

    setTimeout(function() {
        animation_init();
    }, 100);
});
