// Go back

let backBtn = document.querySelector('.backBtn');

backBtn.addEventListener('click', () => {
  // window.open('http://127.0.0.1:5500/index.html', '_self');
  window.open('https://akademac.github.io/AmericanDream/index.html', '_self')
})

// Social Media

let aD_instaIcon = document.querySelector('.aD_instaIcon');
let aD_faceIcon = document.querySelector('.aD_faceIcon');

aD_instaIcon.addEventListener('click', () => {
  window.open('https://www.instagram.com/americandream.work/?igshid=YmMyMTA2M2Y=&fbclid=IwAR0Slnrj5sHLnOtFvkPY1s_ZyQp-3u0ZaR-kSRx4PDSVHhs6AarGyOdpABs');
})

aD_faceIcon.addEventListener('click', () => {
  window.open('https://m.facebook.com/americandream.work/');
})

