<?php
    $to = 'ediztekok@gmail.com';
    $name = strip_tags($_POST["name"]);
    $email= strip_tags($_POST["email"]);
    $subject= strip_tags($_POST["subject"]);
    $msg = strip_tags($_POST["message"]);

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" border="3" cellpadding="10">';
    $message .= '<tr><td colspan="2"><img src="https://media1.tenor.com/images/b4a913503484d9120abbf56845aedac3/tenor.gif?itemid=10880734" alt="You have got a mail!" style="width: 100%; height: fit-content"/></td></tr>';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Subject:</strong> </td><td>" . $subject . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . $msg . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    $message = nl2br($message);

    if (empty($name) or empty($email) or empty($subject) or empty($msg)){
            echo "Invalid input!";
    }
    else{
        if (@mail($to, $subject, $message, $headers))
            {
                echo 'Thank you for your message on subject "' .$subject. '"! I will get back to you shortly.';
            }else{
                echo 'Sorry, failed to send your message on "' .$subject. '"! Please try again. If this problem persists, please let me know at ediztekok at gmail.com';
            }   
    }
?>
