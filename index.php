<?php
session_start();
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    header('Location:'.$_SESSION['lastPage']);
} else {
    header('Location: auth.php');
}
//print_r($_SERVER);