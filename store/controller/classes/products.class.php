<?php
class Product {
    private $products_table_name;
    private $categories_table_name;
    private $database;
    private $filter;

    public function __construct() {
        $this->products_table_name = $_ENV["PRODUCTS_TABLE_NAME"];
        $this->categories_table_name = $_ENV["CATEGORIES_TABLE_NAME"];
        $this->database = new Db();
        $this->filter = new Filter();
    }

    public function addProduct(string $product_name, string $product_description, string $original_price, string $sale_price, string $available_quantity, string $product_category, string $acess_token, string $store_id): bool {
        if(!empty($product_name) && !empty($product_description) && !empty($original_price) && !empty($sale_price) && !empty($available_quantity) && !empty($product_category)) {
            $data = [
                "product_name" => $this->filter->filterHTML($product_name),
                "product_description" => $this->filter->filterHTML($product_description),
                "original_price" => $this->filter->filterHTML($original_price),
                "sale_price" => $this->filter->filterHTML($sale_price),
                "available_quantity" => $this->filter->filterHTML($available_quantity),
                "product_category" => $this->filter->filterHTML($product_category),
                "access_token" => $acess_token,
                "store_id" => $store_id,
            ];
            $this->database->addDATA($this->products_table_name, $data);
            return true;
        }
        return false;
    }
    public function getAllProducts(string $key, string $value): array {
        return $this->database->selectDATA($this->products_table_name, $key, $value);
    }

    public function getStoreProducts(string $key, string $value): array {
        return $this->database->selectDATA($this->products_table_name, $key, $value);
    }
    public function getProductByCategory(): array {

    }

    public function deleteSpecificProducts(string $id): bool {
        return $this->database->deleteDATA($this->products_table_name, "store_id" , $id);
    }

    public function deleteProduct(string $id): bool {
        return $this->database->deleteDATA($this->products_table_name, "id", $id);
    }

    public function deleteAllProducts(): bool {
        return $this->database->deleteAllData($this->products_table_name);
    }

    public function addCategory(string $category_name): bool {
        if(!empty($category_name)) {
            $data = [
                "category_name" => $this->filter->filterHTML($category_name),
            ];
            return $this->database->addDATA($this->categories_table_name, $data);
        }
        return false;
    }

    public function getUserProductsCount(string $access_token): int {
        return count($this->database->selectDATA($this->products_table_name, "access_token", $access_token));
    }

    public function getAllCategories(): array {
        return $this->database->selectAllData($this->categories_table_name);
    }

}