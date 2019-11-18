<?php



function csc_menu( $atts ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'art' => 'seiten',
            'sortierung' => 'menue',
        ),
        $atts
    );


    $return = '';


    $return .= '<ul class="nav justify-content-center" id="onepager-nav" style="text-transform:capitalize;">';
    $return .= '</ul>';


    return $return;


}
add_shortcode( 'seitenmenue', 'csc_menu' );