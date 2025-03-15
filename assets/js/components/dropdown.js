export default function initDropdowns() {
  const dropdowns = document.querySelectorAll('[data-dropdown]');

  function closeAll() {
    dropdowns.forEach(dropdown => {
      dropdown.classList.remove('is-open');
    });
  }

  dropdowns.forEach(dropdown => {
    const trigger = dropdown.querySelector('[data-dropdown-trigger]');
    const menu = dropdown.querySelector('[data-dropdown-menu]');

    if (!trigger || !menu) return;

    trigger.addEventListener('click', (e) => {
      e.stopPropagation();

      // Закрываем все, кроме текущего
      dropdowns.forEach(d => {
        if (d !== dropdown) d.classList.remove('is-open');
      });

      dropdown.classList.toggle('is-open');
    });
  });

  // Клик вне dropdown — закрыть все
  document.addEventListener('click', closeAll);

  // Клик по самому dropdown — не закрывать
  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('click', e => e.stopPropagation());
  });
}
