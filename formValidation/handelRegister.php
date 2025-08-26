<?php
require_once 'register.php';
$errors=[];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    //NAME NALIDATION
    if (empty(htmlspecialchars(trim($_POST['name'])))) {
        $errors['name']= "name is required";
    } elseif (is_string($_POST['name'])) {
        $errors['name']= "name must be sring";
    }
    //EMAIL VALIDATION
    if (empty(htmlspecialchars(trim($_POST['email'])))) {
        $errors['email']= "email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email']= "must enter valid email";
    }
    //PHONE
    if (empty(htmlspecialchars(trim($_POST['phone'])))) {
        $errors['phone']= "Phone is required";
    } elseif (!is_numeric($_POST['phone'])) {
        $errors['phone']= "must enter valid phone must be number";
    }
    //password
    if(empty(htmlspecialchars(trim($_POST['password'])))){
        $errors['password']= "password is required";
    }elseif(strlen($_POST['password'])<8){
        $errors['password']= "password must be 8 character or more";
    }


}
