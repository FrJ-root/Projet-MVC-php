<?php
namespace App\Models;
use App\Core\Database;
use PDO;

class Article {
    private $db;

    public function __construct() {
        $this->db = Database::init()->getConnection();
    }
    public function getAllArticles() {
        $sql = 'SELECT * FROM articles';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}