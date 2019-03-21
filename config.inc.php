//DoctrineTest/includes/config.inc.php
<?php
require './vendor/autoload.php';
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$connOptions = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'root',
    'password' => '',
    'dbname' => 'doctrine_test',
    'charset' => 'utf8'
    
];
//ermittelt den absoluten Pfad
$path = dirname(__DIR__);
$config = Setup::createAnnotationMetadataConfiguration(
        [$path.'/classes/Entity'],
        true,
        null,
        null,
        false);
$entityManager = EntityManager::create($connOptions, $config);
