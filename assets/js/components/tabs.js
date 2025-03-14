const tabsContainers = document.querySelectorAll('[data-tabs]');

tabsContainers.forEach(container => {
  const tabButtons = container.querySelectorAll('[data-tab-button]');
  const tabContents = container.querySelectorAll('[data-tab-content]');

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      const target = button.getAttribute('data-tab-button');

      // Убираем активные классы со всех кнопок и контента
      tabButtons.forEach(btn => btn.classList.remove('is-active'));
      tabContents.forEach(content => content.classList.remove('is-active'));

      // Активируем выбранную вкладку
      button.classList.add('is-active');
      const activeContent = container.querySelector(`[data-tab-content="${target}"]`);
      if (activeContent) {
        activeContent.classList.add('is-active');
      }
    });
  });
});
