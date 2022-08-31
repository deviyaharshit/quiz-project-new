<?php
session_start();
unset($_SESSION['IS_LOGIN']);
header("location: ./login.php");
session_destroy();
?>