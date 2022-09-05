<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["fname"]);
session_start();
if(!isset($_SESSION["uid"])){
    header('Location: login.php');
    session_destroy();
}
?>