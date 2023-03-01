<?php	
session_start();
unset($SESSION['username']);
sesssion_destroy();
header('location: ..template/index.php');
exit();
?>