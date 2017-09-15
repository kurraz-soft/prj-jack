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

        $(id).parents('.g-tab-content').find('.g-tab-panel.active').removeClass('active');
        $(id).addClass('active');
    });

     $('body').tooltip({
         //selector: '[data-toggle="tooltip"]'
         selector: '[title]'
     });

     $('body').on('click', '.g-checkbox.g-ajax-link:not(.disabled)', function (e) {
         e.preventDefault();
         e.stopImmediatePropagation();

         if($(this).hasClass('g-radio'))
         {
             $('.g-radio[rel="'+$(this).attr('rel')+'"].checked').removeClass('checked');
         }

         $(this).toggleClass('checked');

         $.ajax({
             url: $(this).attr('href'),
             success: function (data) {
             }
         });
     });

     checkTabHash();
});

function checkTabHash() {
    var hash = window.location.hash;
     if(hash.indexOf('#tab-') === 0)
     {
         $('.g-tab[href="' + hash + '"]').click();
     }
}