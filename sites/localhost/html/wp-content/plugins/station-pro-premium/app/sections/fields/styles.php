<?php
global $stationpro;
Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Style your player', 'stationpro'),
        'desc' => esc_html__('In this option you can customize it and improve its appearance! If you want, you can position yourself at the top of the page. ', 'stationpro') . (stationpro()->is__premium_only() == false ? '<p class="my-2 notification is-info is-light">Some feature are only premium; please <a class="is-text" href=' . $stationpro->get_upgrade_url() . ' title="upgrade"> upgrade your plugin </a>  for more customization.</p>' : ''),
        'id' => 'player_styles',
        'subsection' => true,
        'customizer_width' => '900px',


        'fields' => array(

            array(
                'id' => 'top',
                'type' => 'switch',
                'title' => esc_attr('Player on topbar', 'stationpro'),
                'subtitle' => esc_attr('Keep the player on top of the page.', 'stationpro'),
                'default' => false,
                'disabled' => false,
            ),
            array(
                'id'       => 'nav_bg_color',
                'type'     => 'color',
                'title'    => esc_html__('Nav player background Color', 'stationpro'),
                'subtitle' => esc_html__('Pick a background color for player', 'stationpro'),
                'default'  => '#0000C4',
                'validate' => 'color',
                'transparent' => false,
                'disabled' => stationpro()->is__premium_only() ? false : true,
            ),

            array(
                'id'       => 'text_color',
                'type'     => 'color',
                'title'    => esc_html__('Player text color', 'stationpro'),
                'subtitle' => esc_html__('Pick a color the text of player (default: #424242).', 'stationpro'),
                'default'  => '#f5f5f5',
                'validate' => 'color',
                'transparent' => false,
                'disabled' => stationpro()->is__premium_only() ? false : true,
            ),

            array(
                'id'       => 'nav_opacity',
                'type'     => 'spinner',
                'title'    => esc_html__('Player opacity', 'stationpro'),
                'subtitle' => esc_html__('Settings transparencie the player\'s settings.', 'stationpro'),
                'desc'     => esc_html__('Settings the value. Min:0, max: 100, default value: 80', 'stationpro'),
                'default'  => '80',
                'min'      => '0',
                'step'     => '5',
                'max'      => '100',
                'disabled' => stationpro()->is__premium_only() ? false : true,
            ),





            array(
                'id'       => 'accent_color',
                'type'     => 'color_palette',
                'title'    => esc_html__('Color accent', 'stationpro'),
                'subtitle' => esc_html__('Custom colors with round selectors for buttons and other styles', 'stationpro'),

                'default'  => 'indigo',
                'disabled' => stationpro()->is__premium_only() ? false : true,
                'options'  => array(
                    'colors' => array(
                        'white',
                        'gray',
                        'red',
                        'pink',
                        'purple',
                        'indigo',
                        'blue',
                        'cyan',
                        'teal',
                        'green',
                        'lime',
                        'yellow',
                        'orange',


                    ),
                    'style'  => 'round',
                    'size' => 40,
                    'margin' => true,

                ),
                'output'   => array(
                    'color'     => '.widget-title',
                    'important' => true,
                ),
            ),
        ),
    ),

);

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('Embed player', 'stationpro'),
        'desc'             => esc_html__('Theme player should be embedded in your site. You can customize this snipper by copying and pasting the shortcode into your page.', 'stationpro') . ('<br></br>'),
        'id'               => 'style_embed',
        'subsection'       => true,
        'customizer_width' => '600px',
        'fields'           => array(



            array(
                'id'         => 'theme_vivaldi_code',
                'type'       => 'textarea',
                'full_width' => false,
                'title'      => __('<p class="is-size-5">Theme Vivaldi</p>', 'stationpro'),

                'rows'       => 1,
                'subtitle'        => __('<i class="el el-website el-3x"></i>'),
                'class'      => 'p-1',
                'readonly' => true,

                'default'    => '[stationpro theme="vivaldi" width="300" height="185" ]',
            ),

            array(
                'id'         => 'theme_widget_code',
                'type'       => 'textarea',
                'full_width' => false,
                'title'      => __('<p class="is-size-5">Theme Widget</p>', 'stationpro'),

                'rows'       => 1,
                'subtitle'        => __('<i class="el el-website el-3x"></i>'),
                'class'      => 'p-1',
                'readonly' => true,

                'default'    => '[stationpro theme="widget" width="400" height="570"  ]',
            ),


        ),


    ),
);
