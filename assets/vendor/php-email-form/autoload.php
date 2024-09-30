<?php
require 'vendor/php-email-form/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('roohzahidhasan')
  ->setPassword('@Jahid15111998@');

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Hello'))
  ->setFrom(['roohzahidhasan@gmail.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself');

$result = $mailer->send($message);
?>