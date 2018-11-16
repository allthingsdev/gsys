<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once (__DIR__.'/../lib/vendor/autoload.php');
require_once ('app-config.php');

$config = Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__.'/../app/entities'],
    $isDevMode = true
);

// Setup connection parameters
$db_params = [
    'dbname'    => 'gsys',
    'user'      => 'gsys',
    'password'  => '#gue55P@55#',
    'host'      => 'localhost',
    'driver'    => 'pdo_pgsql'
];

// Get the entity manager
$em = EntityManager::create($db_params, $config);