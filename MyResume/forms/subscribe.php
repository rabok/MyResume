<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Do something with the email, such as saving it to a database or sending a confirmation email.
    
    // For now, let's just send a simple response message.
    echo "You've been subscribed successfully. Thank you!";
}
?>
