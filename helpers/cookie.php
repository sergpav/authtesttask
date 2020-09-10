<?php
function addCookies($sid, $usr_name) {
  setcookie("sid", $sid);
  setcookie("name", $usr_name);
}