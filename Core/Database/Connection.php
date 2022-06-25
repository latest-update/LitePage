<?php

namespace Core\Database;

use Core\Patterns\Singleton\Singleton;

class Connection
{
    use Singleton, MySql;

    protected string $dbname = DB_NAME;
    protected string $user = USER;
    protected string $pass = PASS;
    protected string $host = HOST;


    public static function init(string $dbname = DB_NAME, string $user = USER, string $pass = PASS, string $host = HOST) : void
    {
        Connection::instance()->updateConnection($dbname, $user, $pass, $host);
        Connection::instance()->setSql();
    }

    private function updateConnection(string $dbname, string $user, string $pass, string $host) : void
    {
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
        $this->host = $host;
    }

    protected function DBSelect(string $query) : array
    {
        return self::sendSql( new Sqlf('select', $query) );
    }

    protected function DBInsert(string $query) : array
    {
        return self::sendSql( new Sqlf('insert', $query) );
    }

    protected function DBFind(int $id, string $table) : array
    {
        return self::findById($id, $table);
    }


}