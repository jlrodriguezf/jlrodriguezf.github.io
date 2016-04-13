<?php 
if(isset($_POST['submit'])){
    $to = "jlrodriguezfragoso@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission: " . $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['textbody'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
    }
?>