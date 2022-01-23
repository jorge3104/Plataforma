<?php
session_start();
session_destroy();
if(empty($_SESSION['active'])){
    header("location: index.php");
}

?>