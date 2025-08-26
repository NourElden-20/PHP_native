<?php
require_once 'index.php';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    if (empty(htmlspecialchars(trim($_POST['name'])))) {
        $errors['name'] = "Name is required";
    } 



    if (empty(htmlspecialchars(trim($_POST['email'])))) {
        $errors['email'] = "email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "email is not valid";
    }



    if (empty(htmlspecialchars($_POST['message']))) {
        $errors['message'] = "message is required";
    } elseif (strlen($_POST['message']) < 10) {
        $errors['message'] = 'message too short';
    }elseif(isset($_POST['message'])){
        $user_inpt=$_POST['message'];
        $filename='message.txt';
      $filehandel=  fopen($filename,'a') or die('unable');;
        fwrite($filehandel,$user_inpt."\n") ;
        fclose($filehandel);
        echo 'success';


    }else{
        echo 'error';
    }
}
