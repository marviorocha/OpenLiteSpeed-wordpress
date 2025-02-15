<?php
global $stationpro;
Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Turbo Performace', 'stationpro'),
        'desc' => esc_html__('Turbo provides the foundation for building your radio with a focus on performance and simplicity and continue song player without refresh.', 'stationpro') . (stationpro()->is__premium_only() == false ? '<p class="my-2 notification is-info is-light">Some feature are only premium; please <a target="_blank" class="is-text" href="https://stationpro.co" title="upgrade"> upgrade your plugin </a>  for more customization.</p>' : ''),
        'id' => 'turbo_hotwired',
        'subsection' => true,
        'customizer_width' => '900px',


        'fields' => array(

            array(
                'id' => 'turbo_radio',
                'type' => 'switch',
                'title' => esc_attr('Enable', 'stationpro'),
                'subtitle' => esc_attr('Enable to faster page loads and improved performance', 'stationpro'),
                'default' => false,
                'disabled' =>  stationpro()->is__premium_only() ? false : true,
            ),


        ),
    ),

);
