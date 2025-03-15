<?php

add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

function handle_form_submission() {
  check_ajax_referer('form_nonce', 'nonce');

  $name    = sanitize_text_field($_POST['name'] ?? '');
  $email   = sanitize_email($_POST['email'] ?? '');
  $message = sanitize_textarea_field($_POST['message'] ?? '');

  if (!$name || !$email || !$message) {
    wp_send_json_error(['message' => 'Пожалуйста, заполните все поля.']);
  }

  $to      = get_option('admin_email');
  $subject = 'Новое сообщение с сайта';
  $headers = ['Content-Type: text/html; charset=UTF-8'];
  $body    = "<strong>Имя:</strong> $name<br><strong>Email:</strong> $email<br><strong>Сообщение:</strong><br>$message";

  $sent = wp_mail($to, $subject, $body, $headers);

  if ($sent) {
    wp_send_json_success(['message' => 'Спасибо! Ваше сообщение отправлено.']);
  } else {
    wp_send_json_error(['message' => 'Ошибка при отправке письма.']);
  }
}
