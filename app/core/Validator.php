<?php
namespace App\Core;

class Validator {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function validatePassword($password) {
        return strlen($password) >= 8;
    }
}