$(function() {
    $('nav.mobile').click(function(){
        var listMenu = $('nav.mobile ul');
        var icone = $('.btn-menu-mobile').find('i');
        
        if (listMenu.is(':hidden') == true) {
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
        } else {
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
        }
        listMenu.slideToggle();
    })
})