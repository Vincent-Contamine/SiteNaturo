function verify(e){
    $('.alert').hide();
    if ($('#email').val().length == 0 ||
        $('#password').val().length == 0)
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs</div>').insertAfter(".titre");
    }
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(reg.test(String($('#email').val()).toLowerCase()) == false){
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez saisir un email valide</div>').insertAfter("titre");
    }
}

function verifyI(e){
    $('.alert').hide();
    if ($('#email').val().length == 0 || $('#password').val().length == 0 || $('#cpassword').val().length == 0 || $('#lastName').val().length == 0 || $('#firstName').val().length == 0)
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs</div>').insertAfter(".titre");
    }
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(reg.test(String($('#email').val()).toLowerCase()) == false){
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Veuillez saisir un email valide</div>').insertAfter(".titre");
    }
    if ($('#password').val().length < 6) {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Le mot de passe doit contenir au minimum 6 caractères</div>').insertAfter(".titre");
        
    }
    if ($('#password').val() != $('#cpassword').val())
    {
        e.preventDefault();
        $('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>').insertAfter(".titre");
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

function selectSection(e){
var dec = e.data.dec;
var page = $(this).attr('href'); 
var speed = 750;
$('html, body').animate( { scrollTop: ($(page).offset().top)-dec }, speed ); // Go
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

function verifForm(e){
    $('.alert').hide();
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if ($('#firstName').val().length == 0 || 
        $('#lastName').val().length == 0 ||
        $('#email').val().length == 0 ||
        $('#message').val().length == 0 ) 
    {
        e.preventDefault();
        $('<div class="alert alert-warning" role="alert">Veuillez remplir tous les champs</div>').insertBefore($('.demi'));
    }
    else if (reg.test(String($('#email').val()).toLowerCase()) == false) {
        e.preventDefault();
        $('<div class="alert alert-warning" role="alert">Adresse email invalide !!</div>').insertBefore($('.demi'));
    }
}