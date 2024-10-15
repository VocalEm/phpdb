<?php

namespace Conexion;

use Exception;

class Conexion
{
    private static $instance;
    private $conn;
    private $server;
    private $db;
    private $user;
    private $pass;
    private $dsn;

    private function __construct()
    {
        $this->make_connection();
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function get_database_connection()
    {
        return $this->conn;
    }

    public function setServer($_server)
    {
        $this->server = $_server; // Corregido
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setDb($_db)
    {
        $this->db = $_db; // Corregido
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setUser($_user)
    {
        $this->user = $_user; // Corregido
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPass($_pass)
    {
        $this->pass = $_pass; // Corregido
    }

    public function getPass()
    {
        return $this->pass;
    }

    private function create_dsn()
    {
        $this->dsn = "mysql:host=" . $this->getServer() . ";dbname=" . $this->getDb();
    }

    private function getDsn()
    {
        return $this->dsn;
    }

    private function make_connection()
    {
        try {
            $this->setServer("localhost");
            $this->setDb("platzi");
            $this->setUser("Emiliano");
            $this->setPass("VocalEm343.");
            $this->create_dsn();
            $mysqli = new \PDO($this->getDsn(), $this->getUser(), $this->getPass()); // Se le coloca la diagonal para darle el namespace global a esa clase en específico
            $mysqli->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn = $mysqli;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

// Crear una instancia
Conexion::getInstance();
