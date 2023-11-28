<?php 
session_start();
$_SESSION['logado'] = NULL;
session_destroy();
header('Location: index.php');
?>