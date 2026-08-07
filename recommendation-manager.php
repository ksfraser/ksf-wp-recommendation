<?php
/**
 * Recommendation Manager — WordPress UI for Ksfraser\Recommendation.
 * @package Ksfraser\WP\Recommendation
 * Plugin Name: Recommendation Manager
 * Description: WordPress UI for KSF Recommendation calculations.
 * Version: 1.0.0
 * Author: Kevin Fraser
 */
namespace Ksfraser\WP\Recommendation;
function render_plan( int $debtor_no ): string {
    return sprintf( '<div class="ksf-recommendation-plan" data-debtor="%d">Recommendation plan loading…</div>', $debtor_no );
}
add_shortcode( 'ksf_recommendation_plan', static function ( $atts ) {
    $atts = shortcode_atts( [ 'debtor' => 0 ], $atts, 'ksf_recommendation_plan' );
    return render_plan( (int) $atts['debtor'] );
} );
