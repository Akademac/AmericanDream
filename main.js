//Mini Nav

let burger = document.querySelector('.burgerIcon');
let mini_nav = document.querySelector('.mini__navDiv ');
let nav_x = false;

burger.addEventListener('click', () => {
  if(!nav_x) {
    mini_nav.style.width = '100%';
    nav_x = true
  }
  else {
    mini_nav.style.width = '0%';
    nav_x = false;
  }
})

mini_nav.addEventListener('click', () => {
  mini_nav.style.width = '0%';
  nav_x = false;
})

// Go to second page

let goToSecondPage = document.querySelectorAll('.goToSecondPage');

goToSecondPage.forEach( e => {
  e.addEventListener('click', () => {
    // window.open('http://127.0.0.1:5500/registration.html', '_self');
    window.open('https://akademac.github.io/AmericanDream/registration.html', '_self')
  })
})

