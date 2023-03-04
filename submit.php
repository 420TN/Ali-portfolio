<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Collect form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Set up email parameters
  $to = 'alijeddi03@gmail.com'; // Replace with your email address
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Send the email
  mail($to, $subject, $message, $headers);
}
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Process the form data and send the email
  
  // Redirect the user back to the index page with a success message
  header('Location: index.html');
  exit;


}
?>
