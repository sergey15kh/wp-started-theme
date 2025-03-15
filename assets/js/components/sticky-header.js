export default function initStickyHeader() {
  const header = document.querySelector('[data-sticky]');

  if (!header) return;

  const offset = header.offsetTop;

  window.addEventListener('scroll', () => {
    if (window.scrollY > offset) {
      header.classList.add('is-sticky');
    } else {
      header.classList.remove('is-sticky');
    }
  });
}
