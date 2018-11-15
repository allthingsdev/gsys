<?php 
$root_path = __DIR__.'/../../';
require $root_path.'config/init.php';
require $root_path.'app/entities/User.php';

// define variables and set to empty values
$firstname = $lastname = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $firstname = validate_input($_POST['firstname']);
    $lastname = validate_input($_POST['lastname']);
    $username = validate_input($_POST['username']);
    $password = validate_input($_POST['password']);
}

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

    
    print_r($firstname.'<br>');
    print_r($lastname.'<br>');
    print_r($username.'<br>');
    
    die();
        // Create and persist a new Author
    $user = (new entities\User())
    ->setFirstName($firstname)
    ->setLastName($lastname)
    ->setUserName($username)
    ->setPassword($password)
    ->setCreatedOn(date('Y-m-d H:i:s'))
    ->setUpdatedOn("Smith");
    
    $em->persist($user);
    
    // Finally flush and execute the database transaction
    $em->flush();
    
    header('Location: '.$root_path.'/app/auth/login.php');
}

?>