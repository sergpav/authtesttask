<?php
require_once 'connection.php';
require_once 'redirect.php';
require_once 'ajax.php';
require_once 'validation.php';

$name = $_POST['userlogin'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];
$password_repeat = $_POST['passwordrepeat'];

if ($name && $password && $email && $password_repeat) {
  $name = prepareData($name);
  $password = prepareData($password);
  $password = validatePassword($password);
  $email = prepareData($email);
  $email = validateEmail($email);
  $password_repeat = validatePassword($password_repeat);
  $password_repeat = passwordMatch($password, $password_repeat);
  save_user($name, $email, $password); // function from register.php
} else {
  redirect('All fields required', 'signup');
}

function save_user($name, $email, $pwd) {
  if(getEmail($email)) {
    $password = md5($pwd);
    $result = Connection::getInstance()->query("INSERT INTO users(`username`, `email`, `password`) VALUES ('$name', '$email', '$password')");
    if(!$result) {
      ajaxMsg('DB write error');
    } else {
      ajaxMsg('User created');
    } 
  } 
}


function getEmail($email) {
  
  $conn = Connection::getInstance();
  if($conn->query("SELECT email FROM users WHERE email = '$email'")->num_rows != 0) {
    ajaxMsg('Email already exists');
  } else {
    return true;
  }
}