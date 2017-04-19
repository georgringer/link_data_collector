$(document).ready(function () {
    // trigger the lightbox for any link in the ce-uploads file
    $('.ce-uploads a').click(function (e) {
        e.preventDefault();
        var _this = this;
        $.fancybox.open([
            {
                // use a better url for that
                src: '?type=9615&id=43&file=' + $(_this).attr('href'),
                type: 'iframe'
            }
        ], {
            afterClose: function () {
                location.href = $(_this).attr('href');
            },
            loop: false
        });
    });
});
