<?php

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['txt'];

    $email_from = 'kiprotich.wilfred@students.kyu.ac.ke';
    $email_body="User Name: $name./n";
                "User Email: $visitor_email./n";
                "User Message: $message ./n";

    $to='kwilfred362@gmail.com';
    $headers = "From: $email_from/r/n";
    $headers.="Reply To: $visitor_email";

    mail($to,$email_body,$headers);
    header("Location: contact.php");
 }


?>