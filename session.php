<?php
// Starting session
session_start();
 
// Storing session data
$_SESSION["nome"] = $_POST["res_id"];
$_SESSION["categoria"] = $_POST["categoria"];
$_SESSION["escola"] = $_POST["escola"];
?>
