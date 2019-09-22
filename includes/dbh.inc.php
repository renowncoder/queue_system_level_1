<?php

/**
 * Provides detailed information on the DB environment
 * Stores our values.
 */
class dbh
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    /**
     * Establishes connection to the DB.
     */
    protected function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'username';
        $this->password = 'password';
        $this->dbname = 'db_name';

        $conn = new mysqli(
          $this->servername,
          $this->username,
          $this->password,
          $this->dbname
        );

        return $conn;
    }
}
