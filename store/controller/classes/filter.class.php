<?php
class Filter {

    public function filterHTML($data): string {
        $filtered_data = htmlspecialchars($data);
        return $filtered_data;
    }

    public function verifyEMAIL($email): bool {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function hashPassword(string $password): string {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        return $hashed_password;
    }

    public function verifyPassword(string $passwordFromUser , string $password): bool {
        return password_verify($passwordFromUser, $password);
    }

    public function isRegularLength(string $input): bool {
        if(strlen($input) <= 25) {
            return true;
        }
        return false;
    }
}