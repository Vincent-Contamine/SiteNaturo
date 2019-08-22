$(document).ready(function(){

    $('.welcome').on('click', () => {
        $('.toggle').toggleClass('is-active'); //menu perso
    });

    if (window.location.href.match('inscription.php') != null)
    {
        $('#connect').submit(verifyI);
    }

    if (window.location.href.match('index.php') != null)
    {
        $(window).scroll(scrollFunction);
        $('.js-scrollTo').on('click', selectSection);
        $(window).mouseup(action);
        $('.methode div').hover(addTitle, removeTitle);
    }

    if (window.location.href.match('editUser.php') != null)
    {
        $('.modif').on('click', recupPlaceholder);
    }
});