$(function () {
    $('body').on('click','.game-menu-quick-link',function (e) {
        e.preventDefault();
        $('.game-menu-block:visible').hide();
        $($(this).attr('href')).show();
    });
});
