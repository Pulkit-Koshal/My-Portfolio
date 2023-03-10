<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'your_email@example.com';
  
  $subject = 'New form submission from ' . $name;
  
  $message_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  
  $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
  
  if(mail($to, $subject, $message_body, $headers)) {
    header('Location: thank-you.html');
    exit;
  } else {
    echo 'Error: Unable to send email. Please try again later.';
  }
}
?>
