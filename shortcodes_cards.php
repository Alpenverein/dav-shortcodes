<?php


add_shortcode( 'card', 'card_shortcode' );
add_shortcode( 'cardlayout', 'cardlayout_shortcode' );

function card_shortcode( $atts , $content = null ) {

    $output = '';

    $atts = shortcode_atts(
        array(
            'header' => '',
            'extra' => '',
            'style' => '',
            'title' => '',
            'text' => '',
            'button' => '',
            'button-class' => ''
        ), $atts);


    $output .= '<div class="card '.$atts['extra'].'">';

    $output .= do_shortcode($content);

    $output .= '</div>';

    return $output;
}


function cardlayout_shortcode( $atts, $content = null ) {

    $output = '';

    $atts = shortcode_atts(
        array(
            'type' => 'group'
        ), $atts);


    switch ($atts['type']) {
        case 'group': $cardtype = 'card-group'; break;
        case 'deck': $cardtype = 'card-deck'; break;
        case 'columns': $cardtype = 'card-columns'; break;
        default: $cardtype = 'card-group'; break;
    }


    $output .= '<div class="'.$cardtype.'">';

    $output .= do_shortcode($content);

    $output .= '</div>';

    return $output;

}