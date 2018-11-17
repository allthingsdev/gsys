<?php
session_start();
$root_dir = __DIR__.'/../../';
include $root_dir.'config/init.php';

if(session_destroy()) // Destroying All Sessions
{
    header('Location: '.ROOT_PATH.'app/auth/login.php'); // Redirecting To Home Page
}
?>