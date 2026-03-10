<?php
require "controller/classes/db.class.php";
require "controller/classes/filter.class.php";
require "controller/classes/session.class.php";

class User {
    private $username;
    private $email;
    private $password;
    private $account_status = "active";
    private $payment_status = "unpaid";
    private $role = "user";
    private $store_id = "null";
    private $session;
    private $filter;
    private $database;
    private $users_table_name;


    public function __construct(string $username = "", string $email = "", string $password = "") {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->session = new SessionSettings();
        $this->filter = new Filter();
        $this->database = new Db();
        $this->users_table_name = $_ENV["USERS_TABLE_NAME"];
    }

    private function generateToken(): string {
        $token = bin2hex(random_bytes(4));
        return $token;
    }

    private function currentDate(): string {
        return $creation_date = date("Y-m-d");
    }

    public function register(): array {
        if(!empty($this->username) && !empty($this->email) && !empty($this->password) && $this->filter->isRegularLength($this->username)) {
            if(empty($this->database->selectDATA($this->users_table_name, "email", $this->email))) {
                if($this->filter->verifyEMAIL($this->email)) {
                $token = $this->generateToken();
                $hashedPass = $this->filter->hashPassword($this->password);
                $filteredUsername = $this->filter->filterHTML($this->username);
                $user_data = [
                        "name" => $filteredUsername,
                        "email" => $this->email,
                        "password" => $hashedPass,
                        "access_token" => $token,
                        "account_status" => $this->account_status,
                        "payment_status" => $this->payment_status,
                        "role" => $this->role,
                        "creation_date" => $this->currentDate(),
                     ];
                $this->session->set("user_access_token", $token);
                if($this->database->addDATA($this->users_table_name , $user_data)) {
                    $user_id = $this->database->connection->insert_id;
                    $this->session->set("user_id", $user_id);
                    return [
                "status" => true,
                "message" => "user register ",
                ];
                } else {
                    return [
                "status" => false,
                "message" => "user not register ",
                ];
            }
                
            } else {
                return [
                "status" => false,
                "message" => "your email is invalid",
                ];
            }
        } else {
            return [
                "status" => false,
                "message" => "the email is already used",
                ];
        }
        } else {
            return [
                "status" => false,
                "message" => "try to type something",
            ];
        }
    }

    public function getUserInfo(string $key, string $value): array {
        return $this->database->selectDATA($this->users_table_name, $key , $value);
    }

    public function changePassword(string $user_id, string $old_password, string $confirmed_password, string $new_password): bool {
        if($new_password === $confirmed_password) {
            $data = $this->database->selectDATA($this->users_table_name, "id", $user_id);
            $password = $data[0]["password"];
            if($this->filter->verifyPassword($old_password, $password)) {
                $this->database->updateDATA($this->users_table_name, $user_id, "password" , $this->filter->hashPassword($new_password));
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function changeEmail(string $user_id , string $email): bool {
        if($this->filter->verifyEMAIL($email)) {
            $this->database->updateDATA($this->users_table_name, $user_id, "email", $email);
            return true;
        } else {
            return false;
        }
    }

    public function isLogedIn(): bool {
        return $this->session->has("user_access_token");
    }

    public function login(string $email , string $password): array {
        $user_data = $this->database->selectData($this->users_table_name , "email", $email);
        if(!empty($user_data)) {
            if($this->filter->verifyPassword($password, $user_data[0]["password"])) {
                return $user_data;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }

    public function logout(): bool {
        return $this->session->destroy();
    }
}