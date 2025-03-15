export default function initBurger() {
  const burgers = document.querySelectorAll('[data-burger]');

  if (!burgers.length) return;

  burgers.forEach((burger) => {
    const navSelector = burger.getAttribute('data-target') || '[data-nav]';
    const nav = document.querySelector(navSelector);

    if (!nav) return;

    burger.addEventListener('click', () => {
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-open');
      document.body.classList.toggle('no-scroll');
    });
  });
}

