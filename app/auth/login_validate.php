<?php 
session_start();
$root_path = __DIR__.'/../../';
require $root_path.'config/init.php';
require $root_path.'app/entities/User.php';

// define variables and set to empty values
$username = $password = "";

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $username = validate_input(filter_input(INPUT_POST, 'username'));
    $password = validate_input(filter_input(INPUT_POST, 'password'));
}

function validate_input($formdata) {
    $data = htmlspecialchars(stripslashes(trim($formdata)));
    return $data;
}
    
//$userme = $em->getRepository(entities\User::class)->findOneBy(array('first_name' => 'ama')) ;
//$userme = $em->getRepository(entities\User::class)->findOneByfirst_name($username) ;

//the key 'userName' is the variable in the entity class ..(not the database field name)
$test = $em->getRepository(entities\User::class)
           ->count(['userName' => $username, 'password' => $password]); 

if ($test == 1) {
   $_SESSION['user_id'] = $username; // Initializing Session
   header('Location: '.ROOT_PATH.'app/home/home.php'); // Redirecting To Other Page
} else {
   echo "Username or Password is invalid";
   header('Location: '.ROOT_PATH.'app/auth/login.php');
}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
