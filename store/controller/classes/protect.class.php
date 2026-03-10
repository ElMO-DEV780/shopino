<?php
require_once "controller/classes/session.class.php";
class Protect extends  SessionSettings {
    private $default_path = "login";

    public function protect(): bool {
        
    }
    
}