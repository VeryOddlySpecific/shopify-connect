<?php 

class Shopify_Connect {

    private $admin;
    private $public;

    public function __construct() {
        $this->load_dependencies();
        $this->set_controls();
    }

    private function load_dependencies() {
        require_once VOS_SC_PATH . 'includes/admin/class-shopify-connect-admin.php';
        require_once VOS_SC_PATH . 'includes/public/class-shopify-connect-public.php';
    }

    private function set_controls() {
        $this->admin = new Shopify_Connect_Admin();
        $this->public = new Shopify_Connect_Public();
    }

    public function run() {
        $this->admin->run();
        $this->public->run();
    }
}