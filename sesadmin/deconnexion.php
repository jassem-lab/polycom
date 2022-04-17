<?php
session_start();
$_SESSION = array();
session_destroy();
  echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="login.php" </SCRIPT>';
?>