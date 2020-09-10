<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="public/styles/style.css">
</head>
<body>
  <div class="container">
    <?php if($_GET['msg']): ?>
      <div class="alert alert-success position-absolute" role="alert">
        <?=$_GET['msg'] ?>
      </div>
    <?php endif?>
    <div class="d-flex justify-content-center h-100">
      <form class="login-form center-block" method="POST" action="helpers/login.php">
        <div class="form-group text-center">
          <h3>Login | <a href="/signup.php">Sign Up</a></h3> 
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter username" name="userlogin">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password" name="userpassword">
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary" name="loginButton">Submit</button>
        </div>
        
      </form>
    </div>
    
  </div>
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="public/js/script.js"></script>
</body>
</html>