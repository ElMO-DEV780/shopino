<?php
class Oreder {
    private $orders_table_name;
    private $database;

    private function __construct() {
        $this->orders_table_name = $_ENV[""];
        $this->database = new Db();
    }

    public function setOrder(string $client_name, int $product_id, string $store_name, string $client_phone, string $client_email, string $client_address): bool {
        
    }
}