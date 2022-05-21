<?php


namespace Core\Database;

class Query extends Connection
{

    public static function select(string $query) : array
    {
        return Connection::instance()->DBSelect($query);
    }

    public static function insert(string $query) : array
    {
        return Connection::instance()->DBInsert($query);
    }

    public static function last() : array
    {
        return Connection::instance()->getLastResult();
    }

    public static function find(int $id, string $table) : array
    {
        return Connection::instance()->DBFind($id, $table);
    }
}