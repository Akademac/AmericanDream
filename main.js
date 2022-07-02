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
     window.open('/registration.html', '_self')
  })
})

// Social media

let roadway_instaIcon = document.querySelector('.roadway_instaIcon')
let roadway_faceIcon = document.querySelector('.roadway_faceIcon')
let aD_instaIcon = document.querySelector('.aD_instaIcon');
let aD_faceIcon = document.querySelector('.aD_faceIcon');

roadway_instaIcon.addEventListener('click', () => {
  window.open('https://www.instagram.com/roadway_moving/?igshid=YmMyMTA2M2Y=&fbclid=IwAR1-vAdRmDfRaBFbKTlKFjXMYS83D3KUm8XzXzJlc18JdyFMwqN41ITihXg')
})

roadway_faceIcon.addEventListener('click', () => {
  window.open('https://m.facebook.com/RoadwayMoving/')
})

aD_instaIcon.addEventListener('click', () => {
  window.open('https://www.instagram.com/americandream.work/?igshid=YmMyMTA2M2Y=&fbclid=IwAR0Slnrj5sHLnOtFvkPY1s_ZyQp-3u0ZaR-kSRx4PDSVHhs6AarGyOdpABs');
})

aD_faceIcon.addEventListener('click', () => {
  window.open('https://m.facebook.com/americandream.work/');
})


// Scroll Event

var top  = window.pageYOffset || document.documentElement.scrollTop;
let scrollUpArrow = document.querySelector('.scrollUp');
let visibleDot = document.querySelector('.visibleDot');

window.addEventListener('scroll', (e) => {
  if(isInViewport(visibleDot)) {
    scrollUpArrow.classList.add('scrollUpActive');
  }
  else {
    scrollUpArrow.classList.remove('scrollUpActive');
  }
})


let isInViewport = (e) => {
  const rect = e.getBoundingClientRect();
  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}




scrollUpArrow.addEventListener('click', () => {
    window.scrollTo(0, 0)
})
