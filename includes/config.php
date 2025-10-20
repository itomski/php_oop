<?php

const DB_HOST = 'mysql';
const DB_NAME = 'test';
const DB_USER = 'ro_ot';
const DB_PASSWORD = '';
const DB_CHARSET = 'utf8mb4';

$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true
];

try {
    $dbh = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
}
catch(PDOException $e) {
    echo 'Verbindung zu der DB nicht möglich!';
    //exit();
}