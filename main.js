// Go to second page

let goToSecondPage = document.querySelectorAll('.goToSecondPage');

goToSecondPage.forEach( e => {
  e.addEventListener('click', () => {
    window.open('http://127.0.0.1:5500/registration.html', '_self');
  })
})