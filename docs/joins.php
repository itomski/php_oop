<?php

require_once 'includes/config.php';
require_once 'vendor/autoload.php';

// Ohne Einschränkung wird jede Zeile der linken Tabelle mit jeder Zeile der rechten Tabelle verbunden
// $sql = 'SELECT * FROM kunden INNER JOIN postleitzahlen';

// Mit Einschränkung werden nur Datensätze geliefert, bei denen es eine Verbindung zwischen rechter und linker Tabelle gibt
//$sql = 'SELECT * FROM kunden INNER JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';

// Daten linker Tabelle werden ausgegeben (und mit Daten der rechten erweitert)
//$sql = 'SELECT * FROM kunden LEFT JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';

// Daten rechten Tabelle werden ausgegeben (und mit Daten der linken erweitert)
//$sql = 'SELECT * FROM kunden RIGHT JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';

use \Repository\KundeRepository;

$repo = KundeRepository::getInstance();


//$results = KundeRepository::findAll();
$result = $repo->findById(1);
//$result = KundeRepository::getInstance()->findById(1);

echo '<pre>';
print_r($result);
echo '</pre>';

try {
    $repo->delete($result);
}
catch(PDOException $e) {
    echo 'Kunde konnte nicht gelöscht werden.';
}

$results = $repo->findAll(2,2);

echo '<pre>';
print_r($results);
echo '</pre>';

// Neuer Kunde
//$kunde = new Kunde();
//$kunde->setVorname('Natasha');
//$kunde->setNachname('Romanov');

$kunde = $repo->findById(5);
$kunde->setVorname('Jack');

$repo->save($kunde);

$results = $repo->findAll();

echo '<pre>';
print_r($results);
echo '</pre>';