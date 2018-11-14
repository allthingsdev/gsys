<?php
$root_path = '../';

require_once (__DIR__.'/../lib/vendor/autoload.php');

// Setup Doctrine
$configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__.'/../app/entities'],
    $isDevMode = true
);

// Setup connection parameters
$connection_parameters = [
    'dbname' => 'gsys',
    'user' => 'gsys',
    'password' => '#gue55P@55#',
    'host' => 'localhost',
    'driver' => 'pdo_pgsql'
];

// Get the entity manager
$entity_manager = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);