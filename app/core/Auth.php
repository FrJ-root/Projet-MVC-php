<?php
namespace App\Core;

class Auth {
    public static function login($user) {
        Session::set('user', $user);
    }
    public static function logout() {
        Session::destroy();
    }
    public static function isAuthenticated() {
        return Session::has('user');
    }
}