<?php
class SessionSettings {

    public function start(): bool {
        if(session_status() === PHP_SESSION_NONE) {
            session_start();
            return true;
        } else {
            return true;
        }
    }

    public function set(string $key, string $value): bool {
        $this->start();
        $_SESSION[$key] = $value;
        return true;
    }

    public function get(string $key): string {
        if($this->has($key)) {
            $value = $_SESSION[$key];
            return $value;
        } else {
            return "session variable not set";
        }
    }

    public function has(string $key): bool {
        $this->start();
        return isset($_SESSION[$key]);
    }

    public function remove(string $key): bool {
        $this->start();
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    public function destroy(): bool {
        $this->start();
        session_destroy();
        return true;
    }
}