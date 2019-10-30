$(document).ready(function(){
    //menu perso
    $('.welcome').on('click', () => {
        $('.toggle').toggleClass('is-active');
    });
    
    if (window.location.href.match('connexion.php') != null)
    {
        $('#connect').on('click',verify);
    }

    if (window.location.href.match('inscription.php') != null)
    {
        $('#connect').on('click',verifyI);
    }

    if (window.location.href.match('index.php') != null)
    {   
        $(window).scroll(scrollFunction);
        $('.js-scrollTo').on('click', { dec: 130 }, selectSection);
        $(window).mouseup(action);
        $('.btn-Form').on('click', verifForm);
        if (window.outerWidth >=1200 ){
            $('.methode div').hover(addTitle, removeTitle);
        }
        if (window.innerWidth < 768 ){
            $('.menus').addClass('inactif');
            $('.hamburger').removeClass('inactif');
            $('.hamburger i').on('click', showNav);
        }
    }

    if (window.location.href.match('espacePerso.php') != null ||
        window.location.href.match('espaceAdmin.php') != null)
    {   
        $('.js-scrollTo').on('click', { dec: 200 }, selectSection);
    }

    if (window.location.href.match('espaceAdmin.php') != null || 
        window.location.href.match('patientele.php') != null)
    {
        $('.trashable').hover(addTrash);
    }


    if (window.location.href.match('editUser.php') != null)
    {
        $('.modif').on('click', recupPlaceholder);
    }

    if (window.location.href.match('ficheUser.php') != null)
    {
        $('.rdv-fichePatient').on('click', showReportAdmin); 
    }

    if (window.location.href.match('espacePerso.php') != null)
    {
        $('.rdv-espacePerso').on('click', showReport); 
        if (window.innerWidth < 768 ){
            $('.menus').addClass('inactif');
            $('.hamburger').removeClass('inactif');
            $('.hamburger i').on('click', showNav);
        }
    }



});