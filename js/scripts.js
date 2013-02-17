// Anchor link for scroll
jQuery.fn.anchorAnimate = function(settings) {

    settings = jQuery.extend({
        speed : 1100
    }, settings);   
    
    return this.each(function(){
        var caller = this
        $(caller).click(function (event) {  
            event.preventDefault()
            var locationHref = window.location.href
            var elementClick = $(caller).attr("href")
            
            var destination = $(elementClick).offset().top;
            $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
                window.location.hash = elementClick
            });
            return false;
        })
    })
}

$(document).ready(function() {
    $("a.anchorLink").anchorAnimate()
});
//END Anchor link for scroll

// Begin valid form 
function validateText(str,len){
    return str.length >= len;
}

function validateEmail(str){
    var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

    return emailPattern.test(str);
}

(function($){
    $(function(){
        $('form#contact').submit(function(){
            var feild, err=false;
    
            target = $('#name');
    
            if (validateText( target.val(), 3 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else{
    
                target.removeClass('ok').addClass('err');
                err= true;
            }
    
            target = $('#mail');
    
            if (validateEmail(target.val())) { 
    
                target.removeClass('err').addClass('ok');
            }else {
    
                target.removeClass('ok').addClass('err');
                err=true;
            }

            target = $('#subject');
    
            if (validateText( target.val(), 5 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else{
    
                target.removeClass('ok').addClass('err');
                err= true;
            }
    
            target = $('#txt');
    
            if (validateText( target.val(), 7 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else {
    
                target.removeClass('ok').addClass("err");
                err=true;
            }
    
            return !err;
        });
    });
})(Zepto);
// END valid form

//Active menu
/* (function($){
    $(function(){
        $('div.menu li').click(function(){
            $(this).addClass('active');
        })
    });
})(Zepto); */



   
