<?php

/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package StationPro.co
 */

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('SHOUTcast', 'stationpro'),
        'desc'             => esc_html__('Add your url server the your radio streaming here shoutcast or icecast keep blank  the others that did not used.', 'stationpro') . ('<br></br>'),
        'id'               => 'player_streaming',
        'subsection'       => true,
        'customizer_width' => '900px',
        'fields'           => array(
            array(
                'id' => 'shoutcast',
                'type' => 'text',
                'title' => esc_attr('SHOUTcast', 'stationpro'),
                'desc' => esc_attr('Input your full shoutcast url with port ex: https://79.198.12:10584 keep blank if you don\'t use shoutcast.', 'stationpro'),
                'placeholder' => esc_attr('Shoutcast streaming url', 'stationpro'),
                'validate' => array(
                    'url'
                ),
            ),

        ),
    )
);




Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('Icecast', 'stationpro'),
        'desc'             => esc_html__('Please add your URL server Icecast and your radio streaming here. Please keep the others blank.', 'stationpro') . ('<br></br>'),
        'id'               => 'icecast_streaming',
        'subsection'       => true,
        'customizer_width' => '600px',
        'fields'           => array(
            array(
                'id' => 'icecast',
                'type' => 'text',

                'title' => esc_attr('Icecast', 'station_desciption'),
                'desc' => esc_attr('Input your full icecast url with port ex: http://radio.exemple.fm:8000/stream keep blank if you don\'t use icecast.', 'stationpro'),
                'placeholder' => esc_attr('Icecast streaming url', 'stationpro'),
                'validate' => array(
                    'url'
                ),
                'default' => esc_attr('http://c4.radioboss.fm:8560/stream')
            ),
        ),


    )
);
