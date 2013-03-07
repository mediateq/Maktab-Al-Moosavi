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


function validateText(str,len){
    return str.length >= len;
}

function validateEmail(str){
    var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

    return emailPattern.test(str);
}

function validatePhone(str){
    var phonePattern = /^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/;

    return phonePattern.test(str);
}

function validateSelect(target){
    var selected = $(target);
    
    if (selected.val() != '0') {
        selected.removeClass('err').addClass('ok');
    }
    else{
        selected.removeClass('ok').addClass('err');
        err= true;
    }
}

// Begin valid form 
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
// Begin reserve form 
(function($){
    $(function(){
        $('form#reserve').submit(function(){
            var feild, err=false;
    
            target = $('#name');
    
            if (validateText( target.val(), 9 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else{
    
                target.removeClass('ok').addClass('err');
                err= true;
            }

            target = $('#country');
    
            if (validateText( target.val(), 2 )) {
    
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

            target = $('#persons');
    
            if (validateText( target.val(), 1 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else{
    
                target.removeClass('ok').addClass('err');
                err= true;
            }

            target = $('#phone');
  
            if (validatePhone(target.val())) { 
    
                target.removeClass('err').addClass('ok');
            }else {
    
                target.removeClass('ok').addClass('err');
                err=true;
            }

            validateSelect('#yearin');
            validateSelect('#monthin');
            validateSelect('#dayin');
            validateSelect('#yearout');
            validateSelect('#monthout');
            validateSelect('#dayout');
            validateSelect('#room');
            validateSelect('#prohotels1');
            validateSelect('#prohotels2');
            validateSelect('#prohotels3');

            return !err;
        });
    });
})(Zepto);
// End reserve form