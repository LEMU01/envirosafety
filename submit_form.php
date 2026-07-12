<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Chukua taarifa kutoka kwenye fomu
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Badilisha hapa na email ya taasisi yako
    $to = "aepenvirosafetylimited@gmail.com"; 
    $subject = "Ombi Jipya kutoka kwa: " . $name;
    
    $body = "Jina: $name\nEmail: $email\n\nUjumbe:\n$message";
    $headers = "From: " . $email;

    // Tuma email
    if (mail($to, $subject, $body, $headers)) {
        echo "Asante! Ombi lako limetumwa kwa mafanikio.";
    } else {
        echo "Samahani, kuna tatizo limetokea. Tafadhali jaribu tena baadaye.";
    }
}
?>