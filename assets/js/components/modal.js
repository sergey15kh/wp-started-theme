// assets/js/components/modal.js

const modalTriggers = document.querySelectorAll('[data-modal-trigger]');
const modals = document.querySelectorAll('[data-modal]');
const modalCloseButtons = document.querySelectorAll('[data-modal-close]');

// Открытие модальных окон
modalTriggers.forEach(trigger => {
  trigger.addEventListener('click', () => {
    const target = trigger.getAttribute('data-modal-trigger');
    const modal = document.querySelector(`[data-modal="${target}"]`);
    if (modal) {
      modal.classList.add('is-visible');
      document.body.classList.add('no-scroll');
    }
  });
});

// Закрытие модальных окон кнопками
modalCloseButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('[data-modal]');
    if (modal) {
      modal.classList.remove('is-visible');
      document.body.classList.remove('no-scroll');
    }
  });
});

// Закрытие модальных окон при клике вне контента
modals.forEach(modal => {
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('is-visible');
      document.body.classList.remove('no-scroll');
    }
  });
});
