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

$(function () {

    var Cases = {
        open: function (caseName, lang) {
            Cases.ajaxCase(caseName, lang);
        },
        ajaxCase: function (caseName, lang) {
            $.get(lang + '/show/' + caseName, null, function (response) {
                $('#holder').html(response);
                $('#holder').animate(openAnimation, 1000);
                $("html, body").animate({scrollTop: 0}, 1000);
            });
        },
        close: function () {
            $('#holder').animate(closeAnimation, 1000, function () {
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