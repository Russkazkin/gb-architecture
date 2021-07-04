<?php


namespace ORM;


use Contracts\DbConnectionInterface;

class MysqlDbConnection extends BaseMySqlORM implements DbConnectionInterface
{

    public function connectionStatus()
    {
        // TODO: Implement connectionStatus() method.
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}