<?php
// $receiving_email_address = 'ahmedsafa0759@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $to = 'ahmedsafa0759@gmail.com';

  // Subject of the email
  $email_subject = "Contact subject from portfolio: $subject";

  // Email body
  $email_body = "You have received a new message from the contact form on your portfolio.\n\n" .
    "Here are the details:\n" .
    "Name: $name\n" .
    "Email: $email\n\n" .
    "Message:\n$message\n";

  // Email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Your message has been sent. Thank you!";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
} else {
  echo "Invalid request method.";
}
