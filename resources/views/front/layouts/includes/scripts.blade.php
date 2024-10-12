<script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/meanmenu.js')}}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
<script  src="{{ asset('frontend/assets/js/pace.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.waypoints.js')}}"></script>
<script>
        'use strict';
        // WOW Animatin area start here ***

        new WOW().init();
        // WOW Animatin area start here ***
	</script>

<script>
	'use strict';
    // Cache jQuery objects
    const $cookiesBox = $('.cookies-wrapper');
    const $buttons = $('.button');

    // Show cookies box
    const executeCodes = () => {
        if (document.cookie.indexOf('gratech') === -1) {
            $cookiesBox.addClass('show');
        }
    };

    // Handle button clicks using event delegation
    $cookiesBox.on('click', '.button', function() {
        const $button = $(this);
        $cookiesBox.removeClass('show');

        // Set cookie if accept button is clicked
        if ($button.attr('id') === 'acceptBtn') {
            const expiryDate = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000);
            document.cookie = `cookieBy=gratech; expires=${expiryDate.toUTCString()};`;
        }
    });

    // Execute code on window load
    $(window).on('load', executeCodes);

</script>
<script src="{{ asset('frontend/assets/js/script.js?v2.01')}}"></script>
<script src="{{ asset('frontend/assets/js/simple-notify.min.js?v2.01')}}"></script>
<script src="{{ asset('frontend/assets/js/helpers.js?v2.01')}}"></script>
