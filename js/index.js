$(document).ready(function() {
    $currentTarget = null;
    let isAnimating = false;

    $('.text-blob').click(function(e) {
        if (!isAnimating) {
            $currentTarget = $(this);

            isAnimating = true;

            $currentTarget.animate({
                height: '100vh'
            }, '500');

            $('html, body').animate({
                scrollTop: ($currentTarget.offset().top)
            },500 ,function () {
                setTimeout(disableAnimation, 100)
            });

            function disableAnimation() {
                isAnimating = false;
            }
        }

    });

    $(window).scroll(function() {
        if (!isAnimating) {
            resetCSS();
        }
    });

    function resetCSS() {
        if ($currentTarget !== null) {

            isAnimating = true;

            $currentTarget.animate({
                height: '500px'
            }, '500', function () {
                setTimeout(disableAnimation, 100)
            });

            function disableAnimation() {
                isAnimating = false;
            }

            $currentTarget.removeAttr('style');
        }
    }
});
