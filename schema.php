//DoctrineTest/schema.php
<?php
// Script nach der Erstellung der DB Tabelle aus dem Ordner entfernen
require './includes/config.inc.php';
use Doctrine\ORM\Tools\SchemaTool;
// ermöglicht den Zugriff auf die DB
$tool = new SchemaTool($entityManager);
try {
    $factory = $entityManager->getMetadataFactory();    // Erzeugt eine Factory
    $metadata = $factory->getAllMetadata();             // Verwendet die Factory
    // oder so schreiben
    //$metadata = $entityManager->getMetadataFactory()->getAllMetadata();
    $tool->updateSchema($metadata);
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}
echo 'SchemaTool fertig!';
