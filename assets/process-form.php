if(isset($_GET['submit'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
  
  $to = 'pulkitkoshal0@gmail.com';
  
  $subject = 'New form submission from ' . $name;
  
  $message_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  
  $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
  
  if(mail($to, $subject, $message_body, $headers)) {
    echo "<script>alert('Thank you for your message! We will get back to you as soon as possible.');</script>";
    exit;
  } else {
    echo 'Error: Unable to send email. Please try again later.';
  }
}
