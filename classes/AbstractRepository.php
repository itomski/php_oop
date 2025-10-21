<?php

class AbstractRepository {

    protected $dbh;
    protected $table;
    protected $entity;

    public function findAll(int $limit = 0, int $offset = 0): array {
        $sql = 'SELECT * FROM '.$this->table;
        
        if($limit > 0) {
            $sql .= ' LIMIT '.$offset.', '.$limit;
        }
        return $this->findMany($sql, array());
    }

    public function findById(int $id) { 
        return $this->findOne('SELECT * FROM '.$this->table.' WHERE id = ?', array($id));
    }

    public function delete(Kunde $kunde) {
        $this->deleteById($kunde->getId());
    }

    public function deleteById(int $id): bool { 
        return $this->execute('DELETE FROM '.$this->table.' WHERE id = ?', array($id));
    }

    protected function findMany(string $sql, array $data): array { 
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }

    protected function findOne(string $sql, array $data) { 
        $stmt = $this->dbh->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->entity);
        $stmt->execute($data);
        return $stmt->fetch();
    }

    protected function execute(string $sql, array $data): bool { 
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount() > 0; // Anzahl der geänderter Datensätze
    }
}