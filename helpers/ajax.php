<?php

function ajaxMsg($msg) {
  $message['message'] = $msg;
  $message = json_encode($message);
  echo $message;
  exit;
}