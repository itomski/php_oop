<?php

const DB_HOST = 'mysql';
const DB_NAME = 'fahrzeugverwaltung';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_CHARSET = 'utf8mb4';

function customAutoload(string $class) {
    $path = './classes/'.$class.'.php';
    if(file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('customAutoload');