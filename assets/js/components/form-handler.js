export default function initFormHandler() {
  const forms = document.querySelectorAll('[data-ajax-form]');
  if (!forms.length) return;

  forms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const result = form.querySelector('[data-form-result]');
      const submitBtn = form.querySelector('[type="submit"]');

      if (result) result.textContent = 'Отправка...';

      // 👉 Блокируем кнопку
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add('is-disabled');
        submitBtn.textContent = 'Отправка...';
      }

      const formData = new FormData(form);
      formData.append('action', form.dataset.ajaxAction || 'handle_form_submission');
      formData.append('nonce', FormAjax.nonce);

      try {
        const response = await fetch(FormAjax.ajax_url, {
          method: 'POST',
          body: formData,
        });

        const data = await response.json();

        if (result) result.textContent = data?.data?.message || 'Отправлено';
        if (data.success) form.reset();
      } catch (err) {
        if (result) result.textContent = 'Ошибка при отправке';
        console.error('Form Error:', err);
      } finally {
        // 🔓 Разблокируем кнопку
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove('is-disabled');
          submitBtn.textContent = 'Отправить';
        }
      }
    });
  });
}
