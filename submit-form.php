<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
  $to = "pranavki@buffalo.edu"; // Replace with your actual email address
  $headers = "From: $email";
  
  // Send the email
  $success = mail($to, $subject, $message, $headers);
  
  // Check if the email was sent successfully
  if ($success) {
    echo "Your message has been sent. Thank you!";
  } else {
    echo "An error occurred while sending the message. Please try again later.";
  }
}
?>
