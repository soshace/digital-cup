'use strict';

$(function () {
    var viewAreaHeight = 1036,
        $content = $('.js-content'),
        $contentBg = $('.js-content-bg'),
        $footer = $('.js-footer'),
        $window = $(window);

    /**
     * Function returns true if it's a mobile device
     *
     * @function
     * @name isMobile
     * @returns {boolean}
     */
    function isMobile() {
        return /Android|webOS|iPad|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    /**
     * Function makes element's size relevant to windows size
     *
     * @function
     * @name resizeElement
     * @param {jQuery} $element
     * @returns {undefined}
     */
    function resizeElement($element) {
        var $wrapper = $element.parent('.js-wrapper'),
            elementHeight = $element.height(),
            windowHeight = $window.height(),
            scale = windowHeight / viewAreaHeight;

        $wrapper.css({
            height: elementHeight * scale
        });
        $element.css({
            '-ms-transform': 'scale(' + scale + ')',
            '-o-transform': 'scale(' + scale + ')',
            '-moz-transform': 'scale(' + scale + ')',
            '-webkit-transform': 'scale(' + scale + ')',
            'transform': 'scale(' + scale + ')'
        });
    }

    /**
     * Function makes screen responsive for differs types of devices
     *
     * @function
     * @name makeResponsive
     * @returns {undefined}
     */
    function makeResponsive() {
        var $contentWrapper = $('<div>', {'class': 'content-wrapper js-wrapper'}),
            $contentBgWrapper = $('<div>', {'class': 'content-bg-wrapper js-wrapper'}),
            $footerWrapper = $('<div>', {'class': 'footer-wrapper js-wrapper'});

        if (isMobile()) {
            $content.addClass('content-mobile');
            return;
        }

        $content.addClass('content-desktop');
        $contentBg.addClass('content-bg-desktop');
        $footer.addClass('footer-desktop');
        $content.wrap($contentWrapper);
        $contentBg.wrap($contentBgWrapper);
        $footer.wrap($footerWrapper);
        resizeElement($content);
        resizeElement($contentBg);
        resizeElement($footer);
        $window.on('resize', function () {
            resizeElement($content);
            resizeElement($contentBg);
            resizeElement($footer);
        });
    }

    makeResponsive();
});