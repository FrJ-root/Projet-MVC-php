<?php
namespace App\Core;
use PDOException;
use PDO;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new PDO(
                "pgsql:host=" . $_ENV['DB_HOST'] . ";port=" . $_ENV['DB_PORT'] . ";dbname=" . $_ENV['DB_NAME'], 
                $_ENV['DB_USER'], 
                $_ENV['DB_PASSWORD']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "✅ Conn successful!<br>";
        } catch (PDOException $e) {
            die("❌ Ooooooops! Erreur de conn a db : ".$e->getMessage());
        }
    }    
    public static function init() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->connection;
    }
}