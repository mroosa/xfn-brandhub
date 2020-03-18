<?php
  include_once("_templates/_db/config.php");

  session_destroy();
  header('Location: login');
?>
