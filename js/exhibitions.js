$(document).ready(function() {
    $currentTarget = null;
    let isAnimating = false;

    $('#cosmology,#evolution,#biology,#robotics,#ecology').click(function(e) {
        if (!isAnimating && $(window).width() > 780) {
            $currentTarget = $(this);
            isAnimating = true;

            $currentTarget.animate({
                width: '100vw',
                height: '100vh'
            }, '500');

            if ($currentTarget.attr('id') !== 'biology') {
                $currentSibling = $currentTarget.siblings('.text-blob');

                $currentSibling.find('p,h1').animate({
                    opacity: 0
                }, '50');

                $currentTarget.parent('.column').animate({
                    height: '100vh'
                }, '500');

                $currentSibling.animate({
                    height: '100vh',
                    width: 0
                }, '500');
            }

            $('html, body').animate({
                scrollTop: ($currentTarget.offset().top)
            },500 ,function () {
                setTimeout(disableAnimation, 100);
            });


        }

    });

    $(window).scroll(function() {
        if (!isAnimating && $currentTarget !== null) {
            resetCSS();
        }
    });

    function resetCSS() {
        isAnimating = true;

        if ($currentTarget.attr('id') !== 'biology') {
            $currentTarget.animate({
                width: '50%',
                height: '600px'
            }, '500', function () {
                setTimeout(disableAnimation, 100);
                $currentTarget = null;
            });

            $currentSibling = $currentTarget.siblings('.text-blob');

            $currentSibling.find('p,h1').delay('400').animate({
                opacity: 1
            }, '100');

            $currentTarget.parent('.column').animate({
                height: '600px'
            }, '500');

            $currentSibling.animate({
                height: '600px',
                width: '50%'
            }, '500');

        } else {
            $currentTarget.animate({
                width: '100%',
                height: '600px'
            }, '500', function () {
                setTimeout(disableAnimation, 100);
                $currentTarget = null;
            });
        }
    }

    function disableAnimation() {
        isAnimating = false;
    }
});
