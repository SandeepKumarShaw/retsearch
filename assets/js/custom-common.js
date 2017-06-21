
$(document).ready(function(){
$('.head i.up').click(function(e){
var divlist = $(this).parent().parent().find($('.list-body'));
$(divlist).slideUp(500);
$(this).hide();
$(this).parent().find($('.down')).show();
e.preventDefault();
});
$('.head i.down').click(function(e){
var divlist = $(this).parent().parent().find($('.list-body'));
$(divlist).slideDown(500);
$(this).hide();
$(this).parent().find($('.up')).show();
e.preventDefault();
});
});

jQuery(document).ready(function(){ 
    jQuery('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        auto: true,
    });
});
