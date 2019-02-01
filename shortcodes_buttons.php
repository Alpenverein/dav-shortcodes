<?php
/**
 * Filename: shortcodes_buttons.php
 * Description:
 *
 * User: Stephan Mitteldorf
 * Date: 05.09.18
 * Time: 23:37
 */

// Add Shortcode
function custom_shortcode_buttons( $atts ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'link' => '#',
            'text' => 'Button',
            'classes' => '',
            'farbe' => 'p',
            'target' => ''
        ),
        $atts
    );

    // set value for color of card
    switch ($atts['farbe']) {
        case 'p':
            $button_color = 'btn-primary';
            break;
        case 'd':
            $button_color = 'btn-dark';
            break;
        case 's':
            $button_color = 'btn-success';
            break;
        case 'l':
            $button_color = 'btn-light';
            break;
        case 't':
            $button_color = 'btn-secondary';
            break;
        default:
            $button_color = '';
            break;
    }

    $return = '
	<a href="'.$atts['link'].'" class="btn '.$atts['classes'].' '.$atts['classes'].'">'.$atts['text'].'</a>
    ';

    return $return;

}
add_shortcode( 'button', 'custom_shortcode_buttons' );