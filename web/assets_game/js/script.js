$(function () {
    $('#loading-wrapper').remove();

    $('.character-select-lnk').click(function (e) {
        e.preventDefault();

        $('.character-select-list').hide();
        $('.character-select-detail').hide();
        $($(this).attr('href')).show();
    });
});