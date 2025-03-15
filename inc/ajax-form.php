<?php
add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

function handle_form_submission() {
  check_ajax_referer('form_nonce', 'nonce');

  $name    = sanitize_text_field($_POST['fullname'] ?? '');
  $email   = sanitize_email($_POST['email'] ?? '');
  $message = sanitize_textarea_field($_POST['message'] ?? '');

  if (!$name || !$email || !$message) {
    wp_send_json_error(['message' => 'Заполните все поля.']);
  }

  $to = 'example@mail.com';
  $subject = 'Новое сообщение с формы';
  $headers = ['Content-Type: text/html; charset=UTF-8'];
  $body = "<strong>Имя:</strong> $name<br><strong>Email:</strong> $email<br><br><strong>Сообщение:</strong><br>$message";

  if (wp_mail($to, $subject, $body, $headers)) {
    wp_send_json_success(['message' => 'Спасибо! Сообщение отправлено.']);
  } else {
    wp_send_json_error(['message' => 'Не удалось отправить сообщение.']);
  }
}
