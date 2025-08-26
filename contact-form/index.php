<?php
include 'validation.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Bootstrab/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Contact from</title>
</head>

<body class="d-flex justify-content-center">
    <div class=" card w-50 p-5 m-5">
        <H1>WELCOME TO MY CONTACT FORM</H1>

        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" novalidate>
            <input type="text" name="name" placeholder="name" class="w-50 ">
            <span style="color: red;"><?= $errors['name'] ?? '' ?></span>
            <input type="email" name="email" placeholder="email" class="w-50">
            <span style="color: red;"><?= $errors['email'] ?? ''; ?></span>

            <textarea name="message" id="" class="w-100" placeholder="enter your message"></textarea>
            <span style="color: red;"><?= $errors ['message']?? ''; ?></span>
<br>
            <button type="submit" name="submit" class="btn">SEND</button>

        </form>
    </div>

    <script src="Bootstrab/js/bootstrap.bundle.js"></script>
</body>

</html>
