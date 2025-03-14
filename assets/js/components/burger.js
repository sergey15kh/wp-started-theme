const burger = document.querySelector('[data-burger]');
if (burger) {
  burger.addEventListener('click', () => {
    burger.classList.toggle('is-active');
    document.querySelector('[data-nav]')?.classList.toggle('is-open');
    document.body.classList.toggle('no-scroll');
  });
}
