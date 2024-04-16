<?php 

class Shopify_Connect_Admin_Settings {

    private $settings_data;
    private $settings_sections;

    public function __construct() {
        $this->set_settings_data();
        $this->set_settings_sections();
    }

    private function set_settings_data() {
        $this->settings_data = json_decode( file_get_contents( VOS_SC_PATH . 'includes/assets/settings.json' ), true );
    }

    private function set_settings_sections() {
        $this->settings_sections = json_decode( file_get_contents( VOS_SC_PATH . 'includes/assets/settings-sections.json' ), true );
    }

    private function settings_section_callback( $section ) {
        echo '<h2>' . $section['title'] . '</h2>';
        echo '<p>' . $section['description'] . '</p>';
    }

    public function register_settings() {
        foreach ( $this->settings_data as $setting ) {
            register_setting( $setting['group'], $setting['id'] );
        }
    }

    public function register_settings_sections() {
        foreach ( $this->settings_sections as $section ) {
            add_settings_section( 
                $section['id'], 
                $section['title'], 
                function () use ( $section ) {
                    $this->settings_section_callback( $section );
                }, 
                $section['page'] );
        }
    }
}