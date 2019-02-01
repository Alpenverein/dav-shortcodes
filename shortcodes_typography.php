<?php
/**
 * Filename: shortcodes_typography.php
 * Description:
 *
 * User: Stephan Mitteldorf
 * Date: 26.09.18
 * Time: 12:13
 */



add_shortcode( 'lead', 'typo_lead_shortcode' );


/**
 * @param $atts
 * @param null $content
 * @return string
 */
function typo_lead_shortcode( $atts , $content = null ) {

    $output = '';

    $sc_lead = shortcode_atts(
        array(
            'farbe' => 'n',
        ), $atts);

        $output .= '<span class="lead';
        $sc_lead['farbe'] == 'j' ? $output .= ' text-primary">' : $output .= ' ">';
        $output .= $content;
        $output .= '</span>';

    return $output;
}



