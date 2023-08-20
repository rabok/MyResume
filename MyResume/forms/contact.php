<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library should be uploaded to: ../vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace with your receiving email address
$receiving_email_address = 'njerimarion7@gmail.com';

// Check if the PHP Email Form library file exists
if (file_exists($php_email_form = '../vendor/php-email-form/php-email-form.php')) {
    // Include the library
    include($php_email_form);
} else {
    // Unable to load the library
    die('Unable to load the "PHP Email Form" Library!');
}

// Create an instance of PHP_Email_Form
$contact = new PHP_Email_Form;
$contact->ajax = true;

// Configure email settings
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails.
$contact->smtp = array(
    'host' => 'mail.themvasolutions.com',
    'username' => 'hello@themvasolutions.com',
    'password' => 'Use the email account’s password',
    'port' => '465',
    'encryption' => 'ssl'
);

// Add form data to the email message
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Send the email and echo the result
echo $contact->send();
?>
