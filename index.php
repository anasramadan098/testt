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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hoda Mohammed</title>
</head>
<body>
    <!-- Start Contact -->
    <section class="contact container" id="Contact">
        <div class="title">
            <span>CONTACT</span>
            <h1>Contact With Me</h1>
        </div>
        <div class="holder">  
            <div class="form">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="first">
                        <input type="text" class="input" placeholder="Type Your Name" name="name" required>
                        <input type="text" class="input" placeholder="Type Your Phone Number" name="phone" required>
                    </div>
                    <input type="email" placeholder="Type Your Email" class="input" name="email" required>
                    <textarea placeholder="Type Your Message" class="input" name="message" required></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact -->
    <!-- Back To Top -->
    <a href="#Home" class="no-blank">
        <button class="back-to-top">
            <lord-icon class="arrow active"
        src="https://cdn.lordicon.com/vtpxjewg.json"
        trigger="loop"
        colors="primary:#fff,secondary:#16181c"
        stroke="35"
        style="width:50px;height:50px">
    </lord-icon>
        </button>
    </a>
    <script src="js/main.js"></script>
</body>

</html>
