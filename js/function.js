function verify(e){
    $('.alert').hide();
    if ($('#email').val().length == 0 || $('#password').val().length == 0)
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs</div>').insertAfter("h1");
    }
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(reg.test(String($('#email').val()).toLowerCase()) == false){
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez saisir un email valide</div>').insertAfter("h1");
    }
}

function verifyI(e){
    $('.alert').hide();
    if ($('#email').val().length == 0 || $('#password').val().length == 0 || $('#cpassword').val().length == 0 || $('#lastName').val().length == 0 || $('#firstName').val().length == 0)
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs</div>').insertAfter("h1");
    }
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(reg.test(String($('#email').val()).toLowerCase()) == false){
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez saisir un email valide</div>').insertAfter("h1");
    }
    if ($('#password').val() != $('#cpassword').val())
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>').insertAfter("h1");
    }
}

function scrollFunction(){
    if ($(window).scrollTop() > 10 ){
        $('#titrePrimaire h1').css('font-size', "3rem");
        $('#titreSecondaire p').css('font-size', "2rem");
        $('header img').css('width', "80px").css('padding',"0.5rem");
        $('nav ul li').css('font-size', "0.8rem");
        $('nav ul').css('padding', "0.5rem 0");
    }
    else{
        $('#titrePrimaire h1').css('font-size', "5rem");
        $('#titreSecondaire p').css('font-size', "4rem");
        $('header img').css('width', "120px").css('padding',"1rem");
        $('nav ul li').css('font-size', "1.2rem");
        $('nav ul').css('padding', "1rem 0");
    }
}

function selectSection(){
var page = $(this).attr('href'); 
var speed = 750; 
$('html, body').animate( { scrollTop: ($(page).offset().top)-130 }, speed ); // Go
return false;
}

function action(e){
    if (!$('.welcome').is(e.target) && $('.welcome').has(e.target).length === 0) {
        $('.toggle').removeClass('is-active');
    }
}

function addTitle(e){
    $(this).append('<p>'+e.target.alt+'</p>');  
}
function removeTitle(e){
    $(this).find('p:last').remove();
}

function recupPlaceholder(e){
    var value = (e.currentTarget.value);
    if (value == ""){
        console.log('ok');
        var placeH = (e.currentTarget.placeholder);
        $(this).val(placeH);
    }
    

}