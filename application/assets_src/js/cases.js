var openAnimation = {
    top: 0,
    opacity: 1,
    height: '100vh'
};

var closeAnimation = {
    top: '100vh',
    opacity: 0,
    height: '0vh'
};

var animationTime = 1000;

$(function () {

    var Cases = {
        ajaxCase: function (caseName, lang) {
            $.get(lang + '/show/' + caseName, null, function (response) {
                var interna = $(document).find('interna');
                $('#holder').html(response);
                $('#holder').animate(openAnimation, animationTime, function () {
                    $('.cases').height('auto')
                    $('.cases').animate({ opacity: 0 })
                    $(document).ready(function() {
                        $('.cycle-slideshow').cycle({
                            speed:  800
                        });
                    })
                });
                $("html, body").animate({ scrollTop: 0 }, animationTime);
            });
        },
        open: function (caseName, lang) {
            Cases.ajaxCase(caseName, lang);
        },
        close: function () {
            $('.cases').animate({ opacity: 1, height: '100vh' })
            $('#holder').animate(closeAnimation, animationTime, function () {
                $('#holder').html('');
            });
        }
    };

    $('.case-info-holder').on('click', function () {
        var name = $(this).parent().attr('data-case');
        var lang = $(this).parent().attr('data-lang');
        Cases.open(name, lang);
    });
    $(document).on('click', '.close-case', function () {
        Cases.close();
    });

});