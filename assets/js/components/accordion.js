const accordions = document.querySelectorAll('[data-accordion]');

accordions.forEach(accordion => {
  const triggers = accordion.querySelectorAll('[data-accordion-trigger]');
  triggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const content = trigger.nextElementSibling;
      trigger.classList.toggle('is-active');
      if (content) {
        content.classList.toggle('is-open');
        // Простая анимация: переключение max-height
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
        }
      }
    });
  });
});
