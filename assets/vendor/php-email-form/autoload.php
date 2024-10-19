<?php
require 'vendor/php-email-form/autoload.php';

<form action="https://formspree.io/f/mkgnndkv" method="POST" data-redirect="/thanks">
  <label>
    Your email:
    <input type="email" name="email" required>
  </label>
  <br>
  <label>
    Your message:
    <textarea name="message" required></textarea>
  </label>
  <br>
  <button type="submit">Send</button>
</form>

?>
