<?php
$root_dir = __DIR__.'/../';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once ($root_dir.'lib/vendor/autoload.php');


//APP CONSTANTS
define('APP_NAME',"gsys");
define('ROOT_PATH', 'http://localhost/apps/eclipse-ws/gsys/');

$config = Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__.'/../app/entities'], //paths where Entity classes are to be found
    $isDevMode = true   //defines whether we are working in "dev" mode or not
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