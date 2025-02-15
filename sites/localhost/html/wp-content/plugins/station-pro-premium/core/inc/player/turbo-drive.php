<?php

/**
 * Redux Player Class
 *
 * @class   Redux_Core
 * @version 4.0.0
 * @package StationPro.co
 */



if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Redux_Turbo', false)) {

    class Redux_Turbo
    {

        public $redux_loaded = true;

        public function __construct()
        {


            add_action('wp_body_open', array($this, 'insert_html_before_header'), 10);

            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'), 10);

            add_action('admin_head', array($this, 'admin_head_stationpro'), 10);



            add_filter('script_loader_tag', function ($script_tag) {
                if (is_admin()) {
                    return $script_tag;
                }
                global $current_screen;
                if ($current_screen instanceof \WP_Screen && $current_screen->is_block_editor()) {
                    return $script_tag;
                }

                return str_replace(' src', ' data-turbo-track="reload" src', $script_tag);
            }, 10, 1);

            add_filter('style_loader_tag', function ($style_tag) {
                if (is_admin()) {
                    return $style_tag;
                }
                global $current_screen;
                if ($current_screen instanceof \WP_Screen && $current_screen->is_block_editor()) {
                    return $style_tag;
                }

                return str_replace(' href', ' data-turbo-track="reload" href', $style_tag);
            }, 10, 1);
        }

        public function insert_html_before_header()
        {
            global $stationpro;

            if ($stationpro['turbo_radio'] == 1) {
                echo '<turbo-frame id="turbo_radio">';
            }
        }

        public function enqueue_scripts()
        {
            global $stationpro;
            if ($stationpro['turbo_radio'] == 1) {
                wp_register_script('turbo-drive', 'https://cdn.jsdelivr.net/npm/@hotwired/turbo@8.0.12/dist/turbo.es2017-umd.js', null, null, true);
                wp_enqueue_script('turbo-drive');
            }
        }

        public function admin_head_stationpro()
        {
            global $stationpro;
            if ($stationpro['turbo_radio'] == 1) {
                echo '<meta name="turbo-visit-control" content="reload">';
            }
        }


        public function init()
        {
            if ($this->redux_loaded) {
                return;
            }
            $this->redux_loaded = true;
        }
    }
}
