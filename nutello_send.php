<?php

define ("TO", "<email>");

if(isset($_POST['msg'])) {
    $message = (string) $_POST['msg'];
    $subject = 'Neuer Tell';
    $message = wordwrap($message, 70, "\r\n");
    $headerz = 'From: ' . TO . "\r\n" .
        'Date: ' . date("D, d M Y H:m:s") .
        'Reply-To: ' . TO  . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail(TO, $subject, $message, $headerz);
    
    header("location:index.php?success=1");
    die();
}

header("location:index.php?error=1");
die();

?>
