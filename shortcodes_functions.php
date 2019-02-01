<?php


/**
 * @param $atts
 * @return string
 */
function custom_shortcode_newsletter( $atts, $content=null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'titel' => 'Newsletter bestellen',
            'text' => 'Hier können Sie unseren Newsletter bestellen',
        ),
        $atts
    );

    $return = '<div class="py-5">
	<div class="newsletter-form">
	<div class="row">
	<div class="col-md-6 col-12">
	
	<div class="card">
	    <div class="card-header bg-primary"><h2 class="pt-0 m-0">'.$atts['titel'].'</h2></div>
	    <div class="card-body">
	      <p>'.$atts['text'].'</p>';

    $return .= do_shortcode($content);

    $return .='
	</div>
	</div>
	
	</div>
	</div>
	</div>
	</div>';

    return $return;

}
add_shortcode( 'newsletter', 'custom_shortcode_newsletter' );




/**
 * @param $atts
 * @return string
 */
function custom_shortcode_contactform( $atts, $content=null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'farbe' => 'w',
            'titel' => 'Formular',
            'text' => ''
        ),
        $atts
    );

    $return = '
	<div class="contact-form">
	    <div class="row">
	        <div class="col-12">
	            <div class="card">
	                <div class="card-header bg-primary"><h2 class="pt-0 m-0">'.$atts['titel'].'</h2>
	                    <p class="card-subtitle">'.$atts['text'].'</p>
                    </div>
                    <div class="card-body">
                    '.do_shortcode($content).'
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';

    return $return;

}
add_shortcode( 'formular', 'custom_shortcode_contactform' );