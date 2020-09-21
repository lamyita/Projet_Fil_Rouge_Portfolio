var navbar = document.querySelector('nav')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}
const hamburger = document.querySelector(".hamburger");
const menuNav = document.querySelector(".menu-nav");
const menuSocials = document.querySelector(".socials");

const links = document.querySelectorAll(".menu-nav li");
const linksSo = document.querySelectorAll(".socials li");


hamburger.addEventListener('click', ()=>{
   //Animate Links
    menuNav.classList.toggle("open");
    menuSocials.classList.toggle("open");

    links.forEach(link => {
        // link.classList.toggle("fade");
    });
    linksSo.forEach(link => {
      // link.classList.toggle("fade");
  });


    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});
