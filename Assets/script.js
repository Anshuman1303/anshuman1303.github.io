var navbar = document.getElementById('navbar');
var downButton = document.getElementById('down-button');
function navbarExpand(){
    document.getElementById('nav-list-mobile').classList.toggle('expand');
}
document.addEventListener("scroll", function(){
    if (window.scrollY < 46) {
      navbar.classList.remove('scrolled');
      downButton.classList.remove('hide');
    } 
    else {
      navbar.classList.add('scrolled');
      downButton.classList.add('hide');
    }
});
