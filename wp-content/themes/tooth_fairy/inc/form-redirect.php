<?php
function redir_after_form_sent($form) {
  if ($form->title == "Home Booking Step 4") {
    header('Location: /tooth_fairy_wordpress_site/?page_id=98');
    die();
  }
}
add_action('wpcf7_mail_sent', 'redir_after_form_sent');
?>
