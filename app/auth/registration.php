<?php 
$root_dir = __DIR__.'/../../';
require $root_dir.'config/init.php';
require $root_dir.'app/entities/User.php';

// define variables and set to empty values
$firstname = $lastname = $username = $password = "";

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $firstname = validate_input(filter_input(INPUT_POST, 'firstname'));
    $lastname = validate_input(filter_input(INPUT_POST, 'lastname'));
    $username = validate_input(filter_input(INPUT_POST, 'username'));
    $password = validate_input(filter_input(INPUT_POST, 'password'));
}

//TODO -->move to a validation class
function validate_input($formdata) {
    $data = htmlspecialchars(stripslashes(trim($formdata)));
    return $data;
}

    // Create and persist a new user
    $user = (new entities\User())
    ->setFirstName($firstname)
    ->setLastName($lastname)
    ->setUserName($username)
    ->setPassword($password)
    ->setCreatedOn(new DateTime())
    ->setUpdatedOn(new DateTime());
    
    $em->persist($user);
    
    // Finally flush and execute the database transaction
    $em->flush();
    
    header('Location: '.ROOT_PATH.'app/auth/login.php');

