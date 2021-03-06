<?php 
$root_path = __DIR__.'/../../';
require $root_path.'config/init.php';
require $root_path.'app/entities/User.php';

// define variables and set to empty values
$firstname = $lastname = $username = $password = "";

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $firstname = validate_input(filter_input(INPUT_POST, 'firstname'));
    $lastname = validate_input(filter_input(INPUT_POST, 'lastname'));
    $username = validate_input(filter_input(INPUT_POST, 'username'));
    $password = validate_input(filter_input(INPUT_POST, 'password'));
}

function validate_input($formdata) {
    $data = htmlspecialchars(stripslashes(trim($formdata)));
    return $data;
}
    
    // Create and persist a new Author
    $user = (new entities\User())
    ->setFirstName($firstname)
    ->setLastName($lastname)
    ->setUserName($username)
    ->setPassword($password)
    ->setCreatedOn(new Datetime())
    ->setUpdatedOn(new Datetime());
    
    $em->persist($user);
    
    // Finally flush and execute the database transaction
    $em->flush();
    
    header('Location: '.HTTP_SERVER.'app/auth/login.php');

