<?php
session_start(); 
if(!isset($_SESSION['iid'])){
echo "<script>window.location='../index.php';</script>";
}
?>