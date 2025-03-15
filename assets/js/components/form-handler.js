document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('[data-ajax-form]');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    formData.append('action', 'handle_form_submission');
    formData.append('nonce', FormAjax.nonce);

    const result = form.querySelector('[data-form-result]');
    result.textContent = 'Отправка...';

    try {
      const res = await fetch(FormAjax.ajax_url, {
        method: 'POST',
        body: formData,
      });
      const data = await res.json();
      result.textContent = data.data.message;
      form.reset();
    } catch (err) {
      result.textContent = 'Ошибка. Попробуйте позже.';
    }
  });
});
