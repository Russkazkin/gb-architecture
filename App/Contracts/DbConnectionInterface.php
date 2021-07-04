<?php


namespace Contracts;


interface DbConnectionInterface
{
    public function getConnection();

    public function closeConnection();
}