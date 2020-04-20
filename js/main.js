'use strict'

let headerButton = document.getElementById('headerButton');
let headerMenu = document.getElementById('headerMenu');

headerButton.addEventListener('click', openHeaderMenu);

function openHeaderMenu() {
  headerMenu.classList.toggle('header-top__menu_active');
  headerButton.classList.toggle('header-top__button_active');
}

let newsButton = document.getElementById('news-btn');
let newsForm = document.getElementById('form-wrapper');
let closeFormButton = document.getElementById('news-btn_close');

newsButton.addEventListener("click", openNewsForm);
closeFormButton.addEventListener("click", closeNewsForm);

function openNewsForm() { 
  newsForm.classList.toggle('form-wrapper_active'); 
}

function closeNewsForm() { 
  newsForm.classList.remove('form-wrapper_active'); 
}