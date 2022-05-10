<?php
session_start();
session_destroy();
require_once '../config/config.php';

if (isset($_SESSION['user_name'])) {
    unset($_SESSION['user_name']);
}

ob_start();
header('Location: ' . PAGES['login']);
ob_end_flush();
die();