<?php
  // Get redirect location
  $dest = isset($_GET['d']) ? $_GET['d'] : "index.html";

  include_once("_templates/_db/config.php");

  #echo $_SERVER["HTTP_COOKIE"];

  // Check user login or not
  if(!isset($_SESSION['uname'])){
    header('Location: /login?d=messaging/' . $dest);
    exit;
  } else {
    if (is_file('messaging/' . $dest)){
      readfile('messaging/' . $dest);
    } else {
      header('Location: index.html');
    }
  }

?>
