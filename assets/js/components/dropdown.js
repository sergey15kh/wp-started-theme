const dropdowns = document.querySelectorAll('[data-dropdown]');

dropdowns.forEach(dropdown => {
  const trigger = dropdown.querySelector('[data-dropdown-trigger]');
  const menu = dropdown.querySelector('[data-dropdown-menu]');

  if (trigger && menu) {
    trigger.addEventListener('click', (e) => {
      e.stopPropagation();
      dropdown.classList.toggle('is-open');
    });
  }
});

// Закрываем все dropdown при клике вне
document.addEventListener('click', () => {
  dropdowns.forEach(dropdown => {
    dropdown.classList.remove('is-open');
  });
});
