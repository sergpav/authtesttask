<?php
require_once 'ajax.php';

function prepareData($data) {
  $str = stripslashes($data);
  $str = htmlspecialchars($data);
  $str = trim($data);
  return $str;
}

function validatePassword($data) {
  if(strlen($data) < 6) {
    ajaxMsg('Password must be at least 6 characters');
  } else{
    return $data;
  }
}

function validateEmail($data) {
  if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
    ajaxMsg('Wrong email');
  } else {
    return $data;
  }
}

function passwordMatch($password, $password_repeat) {
  if($password !== $password_repeat) {
    ajaxMsg('Password do not match');
  } else {
    return true;
  }
}

