<?php
class View {
    public $page;

    public function __construct($page) {
        $this->page = $page;
    }

    public function viewPage(): string {
        return require_once $this->page;
    }
}