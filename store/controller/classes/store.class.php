<?php
class Store {
    private $database;
    private $filter;
    private $store_table_name;

    public function __construct() {
        $this->database = new Db();
        $this->filter = new Filter();
        $this->store_table_name = $_ENV["STORES_TABLE_NAME"];
    }

    private function currentDate(): string {
        return $creation_date = date("Y-m-d");
    }

    public function createStore(string $store_name, string $store_description, string $store_theme, string $country , string $address, string $owner_token): bool {
        if(!empty($store_name) && !empty($store_description) && !empty($store_theme) && !empty($country) && !empty($address)) {
        $store_data = $this->database->selectDATA($this->store_table_name , "store_name", $store_name);
        if(empty($store_data)) {
            if($this->getUserStoresCount($owner_token) <= 5) {
                $store_name = $this->filter->filterHTML($store_name);
                $store_description = $this->filter->filterHTML($store_description);
                $store_theme = $this->filter->filterHTML($store_theme);
                $country = $this->filter->filterHTML($country);
                $address = $this->filter->filterHTML($address);
                $data = [
                "store_name" => $store_name,
                "store_description" => $store_description,
                "store_theme" => $store_theme,
                "country" => $country,
                "address" => $address,
                "owner_token" => $owner_token,
                "creation_date" => $this->currentDate(),
                ];
                $this->database->addDATA($this->store_table_name, $data);
                return true;
            }
        }
        }
        return false;
      }

    public function getUserStoresInfo(string $key, string $user_token): array {
        return $this->database->selectDATA($this->store_table_name , $key, $user_token);
    }

    public function getUserStoresCount(string $user_token): int {
        return count($this->database->selectDATA($this->store_table_name, "owner_token", $user_token));
    }



    public function deleteStore(string $id): bool {
        return $this->database->deleteDATA($this->store_table_name ,"id", $id);
    }

    public function getOpenedStore(string $key, string $user_id): array {
        return $this->database->selectDATA($this->store_table_name , $key, $user_id);
    }


}