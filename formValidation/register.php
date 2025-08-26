<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'handelRegister.php';
  
 
  ?>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Bootstrab/css/bootstrap.min.css">
  <title>Register</title>
</head>

<body class="d-flex justify-content-center">

  <form action="handelRegister.php" method="post" class="w-50 p-5" novalidate>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name="name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
      <span style="color:red;"><?= $errors['name'] ?? '' ?></span>
      <small id="emailHelp" class="form-text text-muted"><?php  ?></small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
      <span style="color:red;"><?= $errors['email'] ?? '' ?></span>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input name="phone" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Enter phone">
   <span style="color: red;"><?= $errors['phone'] ?? ''?></span>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span style="color: red;"><?= $errors['password'] ?? ''?></span>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="Bootstrab/js/bootstrap.bundle.js"></script>
</body>

</html>