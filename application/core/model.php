<?php

class Model
{

    public $table;

    protected $pdo;

    public function __construct()
    {
        $dbname = 'mvc';
        $dbuser = 'root';
        $dbpassword = '';
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname='.$dbname,
            $dbuser,
            $dbpassword
        );
    }

    public function get($columns = ['*'])
    {
        return $this->pdo->query(
            'SELECT '.implode(', ', $columns).' FROM `'.$this->table.'`')->fetchAll();
    }

    public function insert($data)
    {
        $values = array_values($data);
        foreach ($values as $id => $value) {
            $values[$id] = '"'.$value.'"';
        }
        return $this->pdo->query(
            'INSERT INTO `'.$this->table.'` ('.implode(', ', array_keys($data)).') VALUES ('.implode(', ', $values).')');
    }

}