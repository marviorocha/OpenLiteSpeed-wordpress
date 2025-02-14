<?php

/**
 * Redux Player Class
 *
 * @class   Redux_Core
 * @version 4.0.0
 * @package StationPro.co
 */
global $stationpro;


if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Redux_Player', false)) {

    /**
     * Class station_player
     */
    class Redux_Player
    {
        /**
         * Is loaded.
         *
         * @var bool
         */
        public $redux_loaded = true;

        /**
         * Get things started
         *
         * @since 1.4
         */
        public function __construct()
        {
            add_action('wp_footer', array($this, 'player_screen'), 10);
            add_shortcode('stationpro', array($this, 'station_pro_shortcode'));
        }


        public function init()
        {

            if ($this->redux_loaded) {
                return;
            }

            $this->redux_loaded = true;
            include_once dirname(__FILE__) . '/views/widget.php';
            add_action('wp_enqueue_style', "player_load");
        }

        function station_pro_shortcode($atts, $content = null)
        {

            // Attributes
            $atts = shortcode_atts(

                array(
                    'theme' => 'vivaldi',
                    'width' => '100',
                    'height' => '120',

                ),
                $atts,
                'stationpro'
            );

            return '<iframe allowfullscreen=""  src="' . esc_url(Redux_Core::$url) . 'inc/player/views/' . $atts['theme'] . '.php" scrolling="no"  id="iframe_default"
             width="' . $atts['width'] . '"
             height="' . $atts['height'] . '"
             class="my-8" frameborder="0">
                                <p>Your browser is not supported iframe</p>
                  </iframe>';
        }

        /**
         * Displays the player screen and includes the main view file.
         *
         * @throws player_screen() description of exception
         * @return void
         */
        public function player_screen()
        {
            global $stationpro;

            if (!$stationpro['hidden_player'] == 1) {

                if ($stationpro["top"] == 1) {
                    echo $stationpro['turbo_radio'] == true ? '</turbo-frame>' : '';
                    echo (
                        '<div style="top:0; position: fixed; z-index: 100  display: block;" class="transition transform fixed z-100 w-full opacity-100 scale-100 translate-y-0 ease-out duration-500"  id="player_stationpro">
                         <iframe allowfullscreen=""  src="' . esc_url(Redux_Core::$url) . 'inc/player/views/main.php" scrolling="no"  id="iframe_default" height="100" class="w-full" frameborder="0">
                        <p>Your browser is not supported iframe</p>
                       </iframe> </div>'
                    );
                } else {

                    echo $stationpro['turbo_radio'] == true ? '</turbo-frame>' : '';
                    echo (
                        '<div style="bottom:0; position: fixed; z-index: 100;  display: block;" class="transition transform fixed z-100 w-full opacity-100 scale-100 translate-y-0 ease-out duration-500"  id="player_stationpro">
                        <iframe allowfullscreen=""  src="' . esc_url(Redux_Core::$url) . 'inc/player/views/main.php" scrolling="no"  id="iframe_default" height="100" class="w-full" frameborder="0">
                        <p>Your browser is not supported iframe</p>
                       </iframe>   </div>'
                    );
                }
            }
        }
    }
}
