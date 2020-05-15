'use strict'

function setEventListener(el, f) {
  if(el) {
      el.addEventListener('click', f)
  }
}

function stopDefAction(evt) {
  evt.preventDefault();
}

let headerButton = document.querySelector('#headerButton');
let headerMenu = document.querySelector('#headerMenu');

function openHeaderMenu() {
  headerMenu.classList.toggle('headerMenu_active');
  headerButton.classList.toggle('header-top__button_active');
}

setEventListener(headerButton, openHeaderMenu);

let formButton = document.querySelector('#openForm');
let formWrapper = document.querySelector('#form-wrapper');
let closeFormButton = document.querySelector('#closeForm');

let formActivity = {
  openForm: function() {
    formWrapper.classList.toggle('form-wrapper_active');
  },
  closeForm: function() {
    formWrapper.classList.remove('form-wrapper_active');
  }
}

setEventListener(formButton, formActivity.openForm);
setEventListener(closeFormButton, formActivity.closeForm);

let scrollButton = document.querySelector('.header-btn');
let firstSection = document.querySelector('#firstSection');


function scrollTo(elem) {
  window.scroll({
    left: 0,
    top: elem.offsetTop,
    behavior: 'smooth'
  })
}

setEventListener(scrollButton, function() {
  scrollTo(firstSection);
});