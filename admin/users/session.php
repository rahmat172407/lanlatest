<?php session_start();
if($_SESSION["login"] != "hundredTrue"){
    header('location: ../index.php');
}
?>