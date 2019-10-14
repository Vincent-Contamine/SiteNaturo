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
        $('.methode div').hover(addTitle, removeTitle);
        $(window).mouseup(action);
        $('.btn-Form').on('click', verifForm);
    }

    if (window.location.href.match('espacePerso.php') != null ||
        window.location.href.match('espaceAdmin.php') != null)
    {   
        $('.js-scrollTo').on('click', { dec: 200 }, selectSection);
    }

    if (window.location.href.match('editUser.php') != null)
    {
        $('.modif').on('click', recupPlaceholder);
    }
});