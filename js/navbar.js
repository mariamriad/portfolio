jQuery(document).ready(function(){
let scroll_start = 0;
const startchange = jQuery('.container');
const offset = startchange.offset();
const jQueryheader = jQuery('header');

console.log(offset.top);
console.log(jQuery(window).scrollTop());

if( jQuery(window).scrollTop() > 365 ){
  // jQuery('#navbar').css({'background-color':'#fff'});
  // jQuery('#navbar a').css({'color':'#000'});
  // jQuery('img.logo').css({'filter':'invert(1)'});
  jQueryheader.addClass('invert');
}


if (startchange.length){
    jQuery(document).scroll(function() {
        scroll_start = jQuery(this).scrollTop();
        if(scroll_start > offset.top){
            // jQuery('#navbar').css({'background-color':'#fff'});
            // jQuery('#navbar a').css({'color':'#000'});
            // jQuery('img.logo').css({'filter':'invert(1)'});
            jQueryheader.addClass('invert');
        }else{
            // jQuery('#navbar').css({'background-color':'#000'});
            // jQuery('#navbar a').css({'color':'#fff'});
            // jQuery('img.logo').css({'filter':'invert(0)'});
            jQueryheader.removeClass('invert');
        }
    });
}
});
