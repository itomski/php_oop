<?php

require_once 'includes/config.php';

// Ohne Einschränkung wird jede Zeile der linken Tabelle mit jeder Zeile der rechten Tabelle verbunden
// $sql = 'SELECT * FROM kunden INNER JOIN postleitzahlen';

// Mit Einschränkung werden nur Datensätze geliefert, bei denen es eine Verbindung zwischen rechter und linker Tabelle gibt
//$sql = 'SELECT * FROM kunden INNER JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';

// Daten linker Tabelle werden ausgegeben (und mit Daten der rechten erweitert)
// $sql = 'SELECT * FROM kunden LEFT JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';

// Daten rechten Tabelle werden ausgegeben (und mit Daten der linken erweitert)
$sql = 'SELECT * FROM kunden RIGHT JOIN postleitzahlen ON kunden.plz = postleitzahlen.plz';


$stmt = $dbh->query($sql);
$results = $stmt->fetchAll();

echo '<pre>';
print_r($results);
echo '</pre>';