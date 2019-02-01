<?php

add_shortcode( 'row', 'grid_row_shortcode' );
add_shortcode( 'column', 'grid_column_shortcode' );



function grid_row_shortcode( $atts , $content = null ) {

    $output = '';

    $sc_row = shortcode_atts(
        array(
            'classes' => '',
        ), $atts);


    $output .= '<div class="row '.$sc_row['classes'].'">';

    $output .= do_shortcode($content);

    $output .= '</div>';

    return $output;
}



function grid_column_shortcode( $atts , $content = null ) {

    $output = '';

    $sc_column = shortcode_atts(
        array(
            'col' => 'col-6',
            'classes' => '',
        ), $atts);


    $output .= '<div class="'.$sc_column['col'].' '.$sc_column['classes'].'">';

    $output .= do_shortcode($content);

    $output .= '</div>';

    return $output;
}