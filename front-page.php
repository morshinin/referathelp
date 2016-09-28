<?php
/**
 * Front page template
 *
 * Subj
 *
 * @link 
 *
 * @package referathelp
 */

get_header(); ?>

<?php
/**
 * Get jumbotron partial
 */
get_template_part( 'partials/content', 'jumbotron' ); 
?>

<div id="content" class="site-content main-padding">

<?php 
/**
 * Get benefits
 */
get_template_part( 'partials/content', 'benefits' );

/**
 * Get services
 */
get_template_part( 'partials/content', 'services' );

/**
 * Get call to action form 1
 */
get_template_part( 'partials/content', 'cta1' );

/**
 * Get payment methods section
 */
get_template_part( 'partials/content', 'pm' );

/**
 * Get workflow section
 */
get_template_part( 'partials/content', 'workflow' );

/**
 * Get call to action form 2
 */
get_template_part( 'partials/content', 'cta2' );

/**
 * Get testimonials section
 */
get_template_part( 'partials/content', 'testimonials' );



get_footer(); ?>