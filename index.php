<?php

// //get data from form  
// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email= $_POST['email'];
// $message= $_POST['message'];
// $to = "anasramadanking@mail.com";
// $subject = "Mail From website";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// };
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        $to = "anasramadanking@mail.com";
        $subject = "Mail From website";
        $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
        $headers = "From: noreply@yoursite.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        if($email!=NULL){
            mail($to,$subject,$txt,$headers);
        };
        
    }
?>
