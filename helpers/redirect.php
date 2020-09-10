<?php
session_start();

function redirect($msg, $location) {
  header("Location: http://{$_SERVER['SERVER_NAME']}/$location.php?msg=$msg");
  die();
}