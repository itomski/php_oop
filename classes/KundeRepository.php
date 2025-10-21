<?php

class KundeRepository extends AbstractRepository {

    private static $instance = null;

    private function __construct()
    {
        $this->dbh = DbUtility::getInstance()->getConnection();
        $this->entity = 'Kunde';
        $this->table = 'kunden';
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    public function save(Kunde $kunde) {
        if($kunde->getId() > 0) {
            self::update($kunde);
        }
        else {
            self::insert($kunde);
        }
    }

    private function insert(Kunde $kunde) {
        $sql = 'INSERT INTO '.$this->table.' (vorname, nachname, strasse, nr) VALUES(?,?,?,?)';
        $data = [$kunde->getVorname(), $kunde->getNachname(), $kunde->getStrasse(), $kunde->getNr()];
        $this->execute($sql, $data);
    }

    private function update(Kunde $kunde) {
        $sql = 'UPDATE '.$this->table.' SET vorname = ?, nachname = ?, strasse = ?, nr = ? WHERE id = ?';
        $data = [$kunde->getVorname(), $kunde->getNachname(), $kunde->getStrasse(), $kunde->getNr(), $kunde->getId()];
        $this->execute($sql, $data);
    }
}