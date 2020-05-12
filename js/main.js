'use strict'

function setEventListener(el, f) {
  if(el) {
      el.addEventListener('click', f)
  }
}

let headerButton = document.getElementById('headerButton');
let headerMenu = document.getElementById('headerMenu');

function openHeaderMenu() {
  headerMenu.classList.toggle('header-top__menu_active');
  headerButton.classList.toggle('header-top__button_active');
}

setEventListener(headerButton, openHeaderMenu);

let newsButton = document.getElementById('openForm');
let newsForm = document.getElementById('form-wrapper');
let closeFormButton = document.getElementById('news-btn_close');

let newsFormActivity = {
  openNewsForm: function() {
    newsForm.classList.toggle('form-wrapper_active');
  },
  closeNewsForm: function() {
    newsForm.classList.remove('form-wrapper_active');
  }
}

setEventListener(newsButton, newsFormActivity.openNewsForm);
setEventListener(closeFormButton, newsFormActivity.closeNewsForm);