export default function initTabs() {
  const containers = document.querySelectorAll('[data-tabs]');

  containers.forEach(container => {
    const buttons = container.querySelectorAll('[data-tab-button]');
    const contents = container.querySelectorAll('[data-tab-content]');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const target = button.dataset.tabButton;

        // Снимаем активные классы
        buttons.forEach(btn => btn.classList.remove('is-active'));
        contents.forEach(content => content.classList.remove('is-active'));

        // Активируем нужное
        button.classList.add('is-active');
        const activeContent = container.querySelector(`[data-tab-content="${target}"]`);
        if (activeContent) activeContent.classList.add('is-active');
      });
    });
  });
}
