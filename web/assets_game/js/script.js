$(function () {
    $('#loading-wrapper').remove();

    $('.character-select-lnk').click(function (e) {
        e.preventDefault();

        $('.character-select-list').hide();
        $('.character-select-detail').hide();
        $($(this).attr('href')).show();
    });

    $('body').on('click','.g-tab',function () {
        var id = $(this).attr('href');
        var $tabs_wrap = $(this).parents('.g-tabs-wrap');

        $tabs_wrap.find('.g-tab > .g-checkbox.checked').removeClass('checked');
        $(this).find('.g-checkbox').addClass('checked');

        console.log(id);

        $(id).parents('.g-tab-content').find('.g-tab-panel.active').removeClass('active');
        $(id).addClass('active');
    });

     $('[data-toggle="tooltip"]').tooltip();

     checkTabHash();
});

function checkTabHash() {
    var hash = window.location.hash;
     if(hash.indexOf('#tab-') === 0)
     {
         $('.g-tab[href="' + hash + '"]').click();
     }
}