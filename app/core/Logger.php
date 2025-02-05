<?php
namespace App\Core;

class Logger {
    private static $logFile = __DIR__ . '/../../logs/app.log';

    public static function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message" . PHP_EOL;
        file_put_contents(self::$logFile, $logMessage, FILE_APPEND);
    }
}