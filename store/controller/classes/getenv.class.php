<?php
class Getenv {
    public static function getenv($path = 'controller/env/.env') {
        if(!file_exists($path)) return;

        $env = parse_ini_file($path);
        foreach($env as $key => $value) $_ENV[$key] = $value;
    }
}