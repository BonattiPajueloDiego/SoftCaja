<?php

class DB
{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    // public function connectMysql()
    // {

    //     try {
    //         $mysql = new mysqli($this->host, $this->user, $this->password, $this->db);
    //         $mysql->set_charset($this->charset);
    //         return $mysql;

    //     } catch (PDOException $e) {
    //         print_r('Error connection: ' . $e->getMessage());
    //     }
    // }
    public function connect()
    {

        try {

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;

        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }

    }
}
