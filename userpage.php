<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="public/styles/style.css">
</head>

<body>
  <div class="container">
    <?php if ($_GET['msg']) : ?>
      <div class="alert alert-success position-absolute" role="alert">
        <?= $_GET['msg'] ?>
      </div>
    <?php endif ?>

    <div class="d-flex justify-content-center h-100">
      <form action="index.php" method="POST" class="form">
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary" >Log Out</button>
        </div>
      </form>
    </div>

  </div>
</body>

</html>