<?php
class Db {
    public $connection;

    private $user_data;
    private $table_name;


    private function connect(): bool {
          $this->connection = new mysqli($_ENV["DATABASE_HOST"], $_ENV["DATABASE_USERNAME"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_NAME"]);
        if ($this->connection->connect_error) {
            die("<b>connection error</b>: " . $this->connection->connect_error);
            return false;
        } else {
            return true;
        }
    }

    function addDATA(string $table_name, array $user_data): bool {
        $this->connect();
        if($this->connect()) {
            $columns = implode(",", array_keys($user_data));
            $placeholders = implode(",", array_fill(0, count($user_data), "?"));
            $stmt = $this->connection->prepare("INSERT INTO $table_name ($columns) VALUES ($placeholders)");
            
            if (!$stmt) {
                return false;
            } else {
                $types = str_repeat("s", count($user_data));
                $stmt->bind_param($types, ...array_values($user_data));
                $result = $stmt->execute();
                $stmt->close();
                return $result;
            }
            $stmt->close();
            $this->connection->close();
        }
    }

    public function selectDATA(string $table_name, string $key , string $value): array {
         $this->connect();
        if($this->connect()) {
            $data = [];
            $stmt = $this->connection->prepare("SELECT * FROM $table_name WHERE $key = ?");
            $stmt->bind_param("s", $value);
            $stmt->execute();
            $result = $stmt->get_result();

            while($row = $result->fetch_assoc()) {
                $data [] = $row;
            }
            return $data;
        } else {
            return [];
        }
        $stmt->close();
        $this->connection->close();
    }

    public function selectAllData(string $table_name): array {
         if($this->connect()) {
            $data = [];
            $result = $this->connection->query("SELECT * FROM $table_name");
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $data [] = $row;
                }
                return $data;
            }
            return [
                "status" => false,
                "message" => "nothing found",
            ];
    }
}

    function updateDATA(string $table_name, string $user_id, string $key, string $new_data): bool {
        $this->connect();
        $stmt = $this->connection->prepare("UPDATE $table_name SET $key = ? WHERE id = ?");
        $stmt->bind_param("ss", $new_data, $user_id);
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
        $this->connection->close();
    }

    public function deleteDATA(string $table_name, string $key, string $value): bool {
        $this->connect();
        $stmt = $this->connection->prepare("DELETE FROM $table_name WHERE $key = ?");
        $stmt->bind_param("s", $value);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
        $this->connection->close();
    }

    public function deleteAllData(string $table_name): bool {
        $this->connect();
        return $this->connection->query("TRUNCATE TABLE $table_name");
    }
}