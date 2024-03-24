<?php
$error_message = "";

if (isset($_POST['fname'])) {
  if (!empty($_POST['fname']) && strlen($_POST['fname']) < 20) {
    echo "yepee first name";
  } else {
    $error_message = "error";
  }
}

if (isset($_POST['lname'])) {
  if (!empty($_POST['lname']) && strlen($_POST['lname']) < 20) {
    echo "yepee last name";
  } else {
    $error_message = "error";
  }
}
