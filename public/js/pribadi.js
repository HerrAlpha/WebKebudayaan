var header = document.querySelector('.header-area'); // mengambil element header
var header2 = document.querySelector('.main-nav'); // mengambil element header


window.addEventListener('scroll', function() {
    var sticky = header.offsetTop; // berguna untuk mengambil nilai top dari header
    console.log(sticky);

    if (window.pageYOffset > sticky) {
        header2.classList.remove("grey-navbar");
        header.classList.add("background-header");
    } else {
        header.classList.remove("background-header");
        header2.classList.add("grey-navbar");
    }
});

// ganti teks link ke hitam
window.addEventListener('scroll', function() {
    var links = document.querySelectorAll('.nav li a');
    if (window.pageYOffset > 0) {
      for (var i = 0; i < links.length; i++) {
        links[i].classList.add('white-link');
        links[i].classList.remove('dark-link');
      }
    } else if (window.pageYOffset === 0) {
      for (var i = 0; i < links.length; i++) {
        links[i].classList.remove('white-link');
        links[i].classList.add('dark-link');
      }
    }
  });
  

// Class active dinamis
const currentUrl = window.location.href;
const navLinks = document.querySelectorAll('.nav a');
navLinks.forEach(link => {
if (link.href === currentUrl) {
    link.classList.add('active');
    }
});

