<?php 
session_start();
require '../lib/phpmailer/PHPMailerAutoload.php';

//make sure to have these settings set in your default gmail account
/*
1. turn less secure apps ON.
2. go to this link https://accounts.google.com/DisplayUnlockCaptcha and click Continue.
*/

if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])){
    $fields = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    ];
        $m = new phpmailer;
        $m->SMTPDebug = 3;

        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->Host = 'smtp.gmail.com';
<<<<<<< HEAD
        $m->Username = 'EnterEmailAddress';  //Enter your email address
        $m->Password = 'Password'; //Enter your email password 
=======
        $m->Username = 'example@email.com';
        $m->Password = 'password';
>>>>>>> edac4c936e68a80cfbd3b31c2ee31ced463ce882
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m->isHTML(true);
        $m->Subject = 'WebForm: ' .$fields['subject'];
        $m->Body = $fields['message'];
        $m->FromName = $fields['email'].' - '.$fields['name'];

        $m->addReplyTo($fields['email'], 'Replying to: ');
<<<<<<< HEAD
        $m->AddAddress('EnterEmailAddress'); //Enter your email address
=======
        $m->AddAddress('example@email.com');
>>>>>>> edac4c936e68a80cfbd3b31c2ee31ced463ce882
        if($m->send()){
            header('Location: ../index.php#contact');
        }else{
           // echo("failed... <a href='../index.php#contact'>Please Try Again! </a>");
            echo $m->ErrorInfo;
        }
}else{
    echo("failed");
}
$_SESSION['fields'] = $fields;
?>
