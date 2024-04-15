import.meta.glob(['../images/**', '../fonts/**']);

import './bootstrap';

// Burger menus
document.addEventListener('DOMContentLoaded', function () {
  // open
  const burger = document.querySelectorAll('.navbar-burger');
  const menu = document.querySelectorAll('.navbar-menu');

  if (burger.length && menu.length) {
    for (let index = 0; index < burger.length; index++) {
      burger[index].addEventListener('click', function () {
        for (let i = 0; i < menu.length; i++) {
          menu[i].classList.toggle('hidden');
        }
      });
    }
  }

  // close
  const close = document.querySelectorAll('.navbar-close');
  const backdrop = document.querySelectorAll('.navbar-backdrop');

  if (close.length) {
    for (let index = 0; index < close.length; index++) {
      close[index].addEventListener('click', function () {
        for (let i = 0; i < menu.length; i++) {
          menu[i].classList.toggle('hidden');
        }
      });
    }
  }

  if (backdrop.length) {
    for (let index = 0; index < backdrop.length; index++) {
      backdrop[index].addEventListener('click', function () {
        for (let i = 0; i < menu.length; i++) {
          menu[i].classList.toggle('hidden');
        }
      });
    }
  }
});


