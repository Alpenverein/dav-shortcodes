<?php


add_shortcode( 'card', 'card_shortcode' );
add_shortcode( 'cardlayout', 'cardlayout_shortcode' );
add_shortcode( 'cardhorizontal', 'card_horizontal' );

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


// Add Shortcode
function card_horizontal( $atts ) {

    $return = '';

    // Attributes
    $atts = shortcode_atts(
        array(
            'bild' => '',
            'titel' => 'Titel',
            'inhalt' => 'Inhalt',
            'spalte' > 4
        ),
        $atts
    );

    $images = wp_get_attachment_image($atts['bild'],'persona_thumb',false, array('class' => 'img-fluid'));

    switch ($atts['spalte']) {
        case 6 : $image_col = 'col-md-2'; $text_col = 'col-md-10'; break;
        case 4 : $image_col = 'col-md-3'; $text_col = 'col-md-9'; break;
        case 3 : $image_col = 'col-md-4'; $text_col = 'col-md-8'; break;
        case 2 : $image_col = 'col-md-6'; $text_col = 'col-md-6'; break;
        default : $image_col = 'col-md-3'; $text_col = 'col-md-9'; break;
    }

    $return .= '<div class="card mb-3 card-horizontal">';
    $return .= '<div class="row no-gutters">';
    $return .= '<div class="'.$image_col.'">';
    $return .= $images;
    $return .= '</div>';
    $return .= '<div class="'.$text_col.'">';
    $return .= '<div class="card-body">';
    $return .= '<h3 class="card-title">'.$atts['titel'].'</h3>';
    $return .= '<p class="card-text">'.$atts['inhalt'].'</p>';
    $return .= '</div>';
    $return .= '</div>';
    $return .= '</div>';
    $return .= '</div>';

    return $return;

}



/**
 * This function generate the Shortcode [preise][/preise]
 * With that you can generate a new line with prices.
 *
 * @param $atts
 * @param null $content
 * @return string
 */
function preisliste_shortcode( $atts , $content = null ) {

    $output = '<div class="row">'.$content.'</div>';

    return $output;
}
add_shortcode( 'preise', 'preisliste_shortcode' );


// Add Shortcode
function preis_shortcode( $atts ) {


    $output = '';

    // Attributes
    $sc_price = shortcode_atts(
        array(
            'name' => '',
            'preis' => '',
            'beschreibung' => '',
        ),
        $atts
    );


    isset($sc_price['name']) ? $name = $sc_price['name'] : $name = '';
    isset($sc_price['price']) ? $price = $sc_price['price'] : $price = '';
    isset($sc_price['description']) ? $description = $sc_price['description'] : $description = '';

    $output .= '<div class="col-md-4 pt-4">
        <div class="card card-price bg-light">
          <div class="card-header bg-primary">
            <p class="price_name"></p>
          </div>
          <div class="card-body">
            <div class="price-body">
              <span class="price">72,- €</span>
              <p>Erwachsene ab dem 25. Lebensjahr</p>
              </table>
            </div>
          </div>
          </div>
        </div>';

    return $output;

}
add_shortcode( 'preis', 'preis_shortcode' );