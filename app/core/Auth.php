<?php
namespace App\Core;

class Auth {
    public static function login($userId) {
        $_SESSION['user_id'] = $userId;
    }
    public static function logout() {
        session_destroy();
    }
    public static function isAuthenticated() {
        return isset($_SESSION['user_id']);
    }
}