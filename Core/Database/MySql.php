<?php


namespace Core\Database;

use mysqli;

trait MySql
{
    private mysqli $mysql;
    protected Sqlf $lastQuery;
    protected array $lastResult;

    private function setSql() : void
    {
        if(!isset($this->mysql))
            $this->mysql = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }

    private function sendSql(Sqlf $query) : ?array
    {
        if(!isset($query->query))
            return null;
        $this->setSql();
        $this->lastQuery = $query;

        switch ($query->statement) {
            case 'select':
                $this->selectDB();
                break;
            case 'insert':
                $this->insertDB();
        }
        return $this->lastResult;
    }

    private function selectDB() : void
    {
        $res = $this->mysql->query($this->lastQuery->query);
        $this->lastResult = $res->fetch_all();
    }

    private function insertDB() : void
    {
        if ( $this->mysql->query($this->lastQuery->query) === true )
            $this->lastResult[] = 'New record created successfully!!!';
        else
            $this->lastResult[] = "Error: {$this->lastQuery->query} \n {$this->mysql->error} ";
    }

    public function getLastResult() : array
    {
        return $this->lastResult;
    }

    public function findById( int $id, string $table) : array {
        $find = new Sqlf('select', 'select * from ' . $table . ' where `id` = ' . $id);
        return $this->sendSql($find);
    }

}