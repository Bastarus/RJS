'use strict'

function setEventListener(el, f) {
  if(el) {
      el.addEventListener('click', f)
  }
}

function stopDefAction(evt) {
  evt.preventDefault();
}

function openHeaderMenu() {
  headerMenu.classList.toggle('headerMenu_active');
  headerButton.classList.toggle('header-top__button_active');
}

function scrollTo(elem) {
  window.scroll({
    left: 0,
    top: elem.offsetTop,
    behavior: 'smooth'
  })
}

let formActivity = {
  openForm: function() {
    modal.classList.toggle('modal_active');
  },
  closeForm: function() {
    modal.classList.remove('modal_active');
  }
}

let headerButton = document.querySelector('#headerButton');
let headerMenu = document.querySelector('#headerMenu');


setEventListener(headerButton, openHeaderMenu);

let openForm = document.querySelector('#openForm');
let modal = document.querySelector('#modal');
let closeFormButton = document.querySelector('#closeForm');

setEventListener(openForm, formActivity.openForm);
setEventListener(closeFormButton, formActivity.closeForm);

let scrollButton = document.querySelector('.header-btn');
let firstSection = document.querySelector('#firstSection');

setEventListener(scrollButton, function() {
  scrollTo(firstSection);
});

let openFileList = document.querySelectorAll('.openFilesList');
let filesCategory = document.querySelectorAll('.files-category');

for(let i = 0; i < openFileList.length; i++) {
  setEventListener(openFileList[i], function() {
    openFileList[i].parentNode.classList.toggle('files-category_active');
  })
}