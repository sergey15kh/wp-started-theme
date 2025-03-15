export default function initAccordion() {
  const accordions = document.querySelectorAll('[data-accordion]');

  accordions.forEach(accordion => {
    const items = accordion.querySelectorAll('[data-accordion-item]');

    items.forEach(item => {
      const trigger = item.querySelector('[data-accordion-trigger]');
      const content = item.querySelector('[data-accordion-content]');

      if (!trigger || !content) return;

      trigger.addEventListener('click', () => {
        const isOpen = item.classList.contains('is-open');

        if (isOpen) {
          item.classList.remove('is-open');
          content.style.maxHeight = null;
        } else {
          item.classList.add('is-open');
          content.style.maxHeight = content.scrollHeight + 'px';
        }
      });
    });
  });
}
