function showMenu(){
    const menuLatereal = document.getElementById('menu-lateral');
    const iconMenu = document.getElementById('img-menu');

    menuLatereal.classList.toggle('ativa' );/*toggle é a opç]ão do ativa e destiva*/

    if(menuLatereal.classList.contains('ativa')){
        iconMenu.src = "img/icon-close-menu.png";
    } else {
        iconMenu.src = "img/icon-hamburger-menu.png"
    }
}