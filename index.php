<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "lubosgulan@seznam.cz";
$subject = "Mail From Website" ;
$txt = "Name =". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Ahoj toto je formular


    <section class="kontakt">
        <div class="kontainer">
            <div class="kontaktinfo">
                <div>
                    <h2>Kontakt info</h2>
                    <ul class="infor">
                        <li>
                            <span><i class="material-icons">info</i></span>
                            <span>Navštivte naše poradentsvo</span>
                        </li>
                        <li>
                            <span><i class="material-icons">mail</i></span>
                            <span>dsadsa@sdasdsa.cz</span>
                        </li>
                        <li>
                            <span><i class="material-icons">phone</i></span>
                            <span>+42117229570</span>
                        </li>
                        <li>
                            <span><i class="material-icons">facebook</i></span>
                            <span>rarefuture</span>
                        </li>
                    </ul>
    
                </div>
            </div>
            <div class="kontaktForm">
                <h2>Pošli mi správu</h2>
                <form action="" method="POST" class="formBox">
    
                    <div class="inputBox w50">
                        <input type="text" name="name" id="name" required>
                        <span>meno</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="lastname" name="lastname" id="lastname" required>
                        <span>priezvisko</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" name="email" id="email" required>
                        <span>E-mail</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="phone" name="phone" id="phone" required>
                        <span>Tel.č</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea type="message" name="message" id="message" required></textarea>
                        <span>Napiš svoju správu</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" required value="Poslať">
    
                    </div>
    
                </form>
            </div>
        </div>
    </section>
</body>
</html>