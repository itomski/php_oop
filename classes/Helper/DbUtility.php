<?php

namespace Helper;

use \PDO;

class DbUtility {

    private static $instance;

    private const DSN = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
    
    private static array $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    private PDO $dbh;

    private function __construct()
    {
        $this->dbh = new PDO(self::DSN, DB_USER, DB_PASSWORD, self::$options);
    }

    public function getConnection()
    {
        return $this->dbh;
    }

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new DbUtility();
        }
        return self::$instance;
    }
}