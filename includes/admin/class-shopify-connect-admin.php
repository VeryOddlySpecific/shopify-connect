<?php 

class Shopify_Connect_Admin {

    private $settings;
    private $display;
    private $authorize;

    public function __construct() {
        $this->load_dependencies();
        $this->set_controls();
    }

    private function load_dependencies() {
        require_once VOS_SC_PATH . 'includes/admin/class-shopify-connect-admin-settings.php';
        require_once VOS_SC_PATH . 'includes/admin/class-shopify-connect-admin-display.php';
        require_once VOS_SC_PATH . 'includes/admin/class-shopify-connect-admin-authorize.php';
    }

    public function set_controls() {
        $this->settings = new Shopify_Connect_Admin_Settings();
        $this->display = new Shopify_Connect_Admin_Display();
        $this->authorize = new Shopify_Connect_Admin_Authorize();
    }
}