<?php

if (isset($_POST['submit'])) {
    $to = "luketaapeeola@gmail.com"; 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From:" . $from;

    if (mail($to, $name, $subject, $message, $from, $headers)) {
        echo "Mail Sent.";
        echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";   
    }
    else {
        echo "failed";
    }
}

?>

