'use strict'

let headerButton = document.getElementById('headerButton');
let headerMenu = document.getElementById('headerMenu');

headerButton.addEventListener("click", openHeaderMenu);

function openHeaderMenu() {
  headerMenu.classList.toggle("header-top__menu_active");
  headerButton.classList.toggle("header-top__button_active");
}