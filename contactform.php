<?php 

// Checking whether user has filled contact form

if(isset($_POST["submit"])){

    // Getting all the things from form

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Assigning a variable to send mail

    // For Team

    $mailTo = "prajwalgmg@gmail.com";
    $headers = "New Querry From: ".$email;
    $txt = "You have received an e-mail from ".$email.".\n\n".$message;

    // For Team
    
    $mailToUser = $email;
    $headers = "Thanks for Contacting Presidency University";
    $txt = "We received your query and our team will contact u soon \n\nRegards, \n\nPresidency University";

    mail($mailTo, $subject, $txt, $headers);



    header("Location: contact.html?mailsend");


}


?>