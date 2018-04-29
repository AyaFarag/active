/*
 jQuery photoslider plugin
 ===================================
 Author: Bjoern Diekert <https://github.com/bdiekert>
 Version: 1.0
 License: Unlicense <http://unlicense.org>
 */

(function ($) {
    "use strict";

    $.fn.photoslider = function (options) {

        var settings = $.extend({
            'autoplay': true,
            'duration': 3000,
            'speed': 400,
            'resize': true,
            'prefix': 'photoslider',
            'navigation': true,
            'navigationPrev': true,
            'navigationNext': true,
            'prevText': 'PREV',
            'nextText': 'NEXT'
        }, options);

        /* Class names */
        var cssClassWrapper = settings.prefix + '__wrapper';
        var cssClassItem = settings.prefix + '__item';
        var cssClassMask = settings.prefix + '__mask';
        var cssClassNav = settings.prefix + '__nav';
        var cssClassNavPrev = settings.prefix + '__prev';
        var cssClassNavNext = settings.prefix + '__next';
        var cssClassAnimation = settings.prefix + '--animation';

        /* Markups */
        var markupWrapper = '<div class="' + cssClassWrapper + '"></div>';
        var markupMask = '<div class="' + cssClassMask + '"></div>';
        var markupNavigation = '<div class="' + cssClassNav + '"></div>';
        var markupNavigationPrev = '<div class="' + cssClassNavPrev + '">' + settings.prevText + '</div>';
        var markupNavigationNext = '<div class="' + cssClassNavNext + '">' + settings.nextText + '</div>';

        /* Setup Function */
        function _setup($target) {

            /* Wrap photoslider items */
            $target.find('.' + cssClassItem).wrapAll(markupWrapper);
            var $wrapper = $target.find('.' + cssClassWrapper);

            /* Mark first and last slide */
            $wrapper.find('.' + cssClassItem + ':first-child').addClass('first-item');
            $wrapper.find('.' + cssClassItem + ':last-child').addClass('last-item');

            /* Wrap mask around wrapper */
            $wrapper.wrap(markupMask);

            /* Clone item */
            var $items = $wrapper.find('.' + cssClassItem);
            $wrapper.prepend($items.clone().addClass('cloned').removeClass('first-item last-item'));
            $wrapper.append($items.clone().addClass('cloned').removeClass('first-item last-item'));

            /* Mark position in wrapper */
            $wrapper.attr('data-pos', 0);

            /* Mark current slide */
            $wrapper.find('.' + cssClassItem + '.first-item').addClass('current-item');

            /* Resize */
            _resize($target);

            /* Scroll to current slide */
            _currentSlide($target);

            /* Start AutoPlay */
            _autoPlayStart($target, settings.duration);

            /* Navigation */
            _setupNavigation($target);
        }

        /* Setup navigation */
        function _setupNavigation($target) {

            /* Check if navigation is false */
            if (!settings.navigation) {
                return false
            }

            /* Build Navigation */
            $target.append(markupNavigation);

            _setupNavigationPrev($target);
            _setupNavigationNext($target);

            return true;
        }

        /* Setup Navigation prev button */
        function _setupNavigationPrev($target) {

            /* Check if prev is false */
            if (!settings.navigationPrev) {
                return false;
            }

            /* Build prev button */
            $target.find('.' + cssClassNav).append(markupNavigationPrev);
            $target.find('.' + cssClassNavPrev).click(function () {
                _moveSlide($target, 'prev');
            });

            return true;
        }

        /* Setup Navigation next button */
        function _setupNavigationNext($target) {

            /* Check if prev is next */
            if (!settings.navigationNext) {
                return false;
            }

            /* Build next button */
            $target.find('.' + cssClassNav).append(markupNavigationNext);
            $target.find('.' + cssClassNavNext).click(function () {
                _moveSlide($target, 'next');
            });

            return true;
        }

        /* Scroll to current slide */
        function _currentSlide($target) {

            var $wrapper = $target.find('.' + cssClassWrapper);

            $wrapper.removeClass(cssClassAnimation);

            /* Set current slide */
            setTimeout(function () {
                var pos = ($target.find('.' + cssClassItem + '.current-item').position().left) * -1;
                var $wrapper = $target.find('.' + cssClassWrapper);
                $wrapper.css('transform', 'translateX(' + pos + 'px)');
                $wrapper.attr('data-pos', pos);
            }, 100);

            /* Set animation class */
            setTimeout(function () {
                $wrapper.addClass(cssClassAnimation);
            }, 250);

        }

        /* Move slide */
        function _moveSlide($target, direction) {

            /* Find item */
            var $wrapper = $target.find('.' + cssClassWrapper);
            var curPos = parseFloat($wrapper.attr('data-pos'));
            var $currentItem = $wrapper.find('.current-item').removeClass('current-item');
            var $nextItem = '';

            /* Previous item */
            if (direction === 'prev') {
                $nextItem = $currentItem.prev();
            }

            /* Next item */
            if (direction === 'next') {
                $nextItem = $currentItem.next();
            }

            /* Get new position */
            var nextPos = ($nextItem.addClass('current-item').position().left * -1) + curPos;

            /* Set new position */
            $wrapper.css('transform', 'translateX(' + nextPos + 'px)');
            $wrapper.attr('data-pos', nextPos);

            /* If Slide is start / end */
            if ($nextItem.hasClass('cloned')) {
                _silentLoop($target, direction);
                return false;
            }

            /* Reset auto-play */
            _autoPlayReset($target, settings.duration);
        }

        /* Silent loop */
        function _silentLoop($target, direction) {

            var time = settings.duration;

            setTimeout(function () {
                /* Find item */
                var $wrapper = $target.find('.' + cssClassWrapper);
                var curPos = parseFloat($wrapper.attr('data-pos'));
                var $nextItem = '';

                $wrapper.find('.current-item').removeClass('current-item');

                /* Previous item */
                if (direction === 'prev') {
                    $nextItem = $wrapper.find('.last-item');
                }

                /* Next item */
                if (direction === 'next') {
                    $nextItem = $wrapper.find('.first-item');
                }

                /* Get new position */
                var nextPos = ($nextItem.addClass('current-item').position().left * -1) + curPos;

                /* Set new position */
                $wrapper.removeClass(cssClassAnimation);
                setTimeout(function () {
                    $wrapper.css('transform', 'translateX(' + nextPos + 'px)');
                    $wrapper.attr('data-pos', nextPos);
                }, 100);

                setTimeout(function () {
                    $wrapper.addClass(cssClassAnimation);
                    _autoPlayReset($target, (time - settings.speed - 400));
                }, 200)

            }, (settings.speed + 100));

        }

        /* AutoPlay Start */
        function _autoPlayStart($target, time) {

            /* Check if auto-play is enabled */
            if (!settings.autoplay) {
                return false;
            }

            $target.interval = window.setTimeout(function () {
                _moveSlide($target, 'next')
            }, time);
            return true;
        }

        /* AutoPlay Reset */
        function _autoPlayReset($target, time) {
            /* Check if auto-play is enabled */
            if (!settings.autoplay) {
                return false;
            }

            window.clearTimeout($target.interval);
            _autoPlayStart($target, time);
            return true;
        }

        /* Resize */
        function _resize($target) {

            /* Check if resize is true */
            if (!settings.resize) {
                return false;
            }

            var $items = $target.find('.' + cssClassItem);
            var photosliderHeight = $target.height();

            $items.each(function () {

                var width = $(this).attr('data-width');
                var height = $(this).attr('data-height');
                var ratio = height / width;

                $(this).height(photosliderHeight);
                $(this).width(photosliderHeight / ratio);

            });

            return true;
        }


        /* Return Slider */
        return this.each(function () {

            /* Photoslider */
            var $target = $(this);

            /* Setup photoslider */
            _setup($target);

            /* Resize */
            $(window).resize(function () {
                _resize($target);
            });

            /* Visibility Change Setup */
            var hidden, visibilityChange;
            if (typeof document.hidden !== "undefined") {
                hidden = "hidden";
                visibilityChange = "visibilitychange";
            } else if (typeof document.msHidden !== "undefined") {
                hidden = "msHidden";
                visibilityChange = "msvisibilitychange";
            } else if (typeof document.webkitHidden !== "undefined") {
                hidden = "webkitHidden";
                visibilityChange = "webkitvisibilitychange";
            }

            /* Visibility Change */
            if (typeof document.addEventListener != "undefined" || typeof document[hidden] != "undefined") {
                document.addEventListener(visibilityChange, function () {
                    if (document[hidden]) {
                        window.clearTimeout($target.interval);
                    } else {
                        _autoPlayStart($target, settings.duration);
                    }
                }, false);
            }

        });

    };

}(jQuery));