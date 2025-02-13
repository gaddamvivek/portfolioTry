<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
 /* 
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
  
  $receiving_email_address = 'pasalakranthi0910@gmail.com';
  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
/*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>  */

<?php
// Get POST data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Configure the receiving email address and subject line
$to = 'pasalakranthi0910@gmail.com';
$email_subject = "New Message from: $name via Contact Form";
$email_body = "You have received a new message.\n\n" .
              "Here are the details:\n" .
              "Name: $name\n" .
              "Email: $email\n" .
              "Subject: $subject\n" .
              "Message:\n$message";

// Check for proper email headers
$headers = "From: $email\n";
$headers .= "Reply-To: $email";

// Send the email
if (mail($to, $email_subject, $email_body, $headers)) {
    echo "OK"; // Response for AJAX success
} else {
    echo "Error: Unable to send email.";
}
?>

