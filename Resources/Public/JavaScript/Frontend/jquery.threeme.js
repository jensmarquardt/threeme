var tx_threeme = (function() {
    return {

        /* jQuery fancyBox Lightbox
         * http://fancyapps.com/fancybox/
         * -------------------------------------------------------------------------------------------------
         */
        fancyboxLighbox : function() {
            var fancybox = $('.lightbox').fancybox({
                openEffect: 'fade',
                closeEffect: 'none',
                prevEffect: 'fade',
                nextEffect: 'fade',
                closeBtn: true,
                margin: 10,
                padding: 10,
                helpers: {
                    title : {
                        type : 'inside'
                    },
                    media: {}
                },
                tpl: {
                    closeBtn: '<a tabindex="2" class="fancybox-item fancybox-close" href="javascript:;"><span class="sr-only">Fenster schließen</span><i class="fancybox-close-icon" aria-hidden="true"></i></a>',
                    prev: '<a title="zurück" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>',
                    next: '<a title="vor" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>'
                },

                // Get title from image
                beforeLoad: function() {
                    this.title = $(this.element).find('img').attr('title');
                },

                // Accessibility improvments
                afterShow: function () {
                    $(this.content).attr('tabindex', 1).focus();
                },
                afterClose: function() {
                    $(this.element).focus();
                }
            });
        },

        // Page scrolling feature with easing plugin
        jQuerySmoothScroll : function() {
            $('.smoothScroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: ($($anchor.attr('href')).offset().top)
                }, 1500, 'swing');
                event.preventDefault();
            });
        },

        /* Bootstrap Accordion
         * Declare active state of panel
         * -------------------------------------------------------------------------------------------------
         */
        bootstrapAccordion : function() {
            var   $bsPanel = $('.bs-panel')
                , $bsPanelCollapse = $bsPanel.find('.panel-collapse')
            ;

            $bsPanelCollapse
                .on('shown.bs.collapse', function() {
                    var $parent = $(this).parent();
                    $parent.addClass('active');
                })
                .on('hidden.bs.collapse', function() {
                    var $parent = $(this).parent();
                    $parent.removeClass('active');
                })
            ;
        },

        /* jQuery CookieBar
         * https://github.com/carlwoodhouse/jquery.cookieBar
         * -------------------------------------------------------------------------------------------------
         */
        jQueryCookieBar : function() {
            $('.threeme-cookiebar').cookieBar({
                secure: false,
                path: '/',
//                domain: 'example.com',
                closeButton : '.threeme-cookiebar-close'
            });
        }

    };
})();

$(function() {
    tx_threeme.fancyboxLighbox();
    tx_threeme.jQuerySmoothScroll();
    tx_threeme.bootstrapAccordion();
    tx_threeme.jQueryCookieBar();
});
