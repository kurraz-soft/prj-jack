$(function () {
    $('body').on('click','.game-menu-quick-link',function (e) {
        e.preventDefault();
        $(this).parents('.game-menu-block:first').hide();
        $($(this).attr('href')).show();
    });
});
