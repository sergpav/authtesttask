<?php
require_once 'connection.php';
require_once 'redirect.php';
require_once 'cookie.php';
require_once 'validation.php';


$name = $_POST['userlogin'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];
$password_repeat = $_POST['passwordrepeat'];

if($name && $password && isset($_POST['loginButton'])) {
  $name = prepareData($name);
  $password = prepareData($password);
  $password = validatePassword($password);
  find_user($name,$password); // function from login.php
} else {
  redirect('All fields are required', 'index');
}


function find_user($name, $pwd) {
  $result = Connection::getInstance()->query("SELECT * FROM users WHERE username = '$name'");
  if($result->num_rows == 0) {
    redirect('User not exists', 'index');
  }else {
    $element = $result->fetch_assoc();
    if ($element['password'] === md5($pwd)) {
      addCookies(session_id(), $element['username']);
      redirect("User $name loged in", 'userpage');
    } else {
       redirect("Wrong password", 'index');
    }
  } 
}

function validatePassword($data) {
  if(strlen($data) < 6) {
    redirect('Password must be at least 6 characters', 'index');
  } else{
    return $data;
  }
}