<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package referathelp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'referathelp' ); ?></a>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation"> 
			<!-- Brand and toggle get grouped for better mobile display --> 
			  <div class="navbar-header"> 
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
			      <span class="sr-only">Toggle navigation</span> 
			      <span class="icon-bar"></span> 
			      <span class="icon-bar"></span> 
			      <span class="icon-bar"></span> 
			    </button> 
			    
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif; ?>
			    </a> 
			  </div>	<!-- .navbar-header -->
<!-- 			  <p class="navbar-text navbar-right">
			  	<?php _e( '+7 (905) 763 43 52', 'referathelp' ); ?>
			  </p>  -->
			  <!-- Collect the nav links, forms, and other content for toggling --> 
			    <?php /* Primary navigation */
			    wp_nav_menu( array(
			      'theme_location' => 'primary',
			      'menu_id' => 'primary-menu',
			      'container'         => 'div',
		          'container_class'   => 'collapse navbar-collapse',
		          'container_id'      => 'bs-example-navbar-collapse-1',
		          'menu_class'        => 'nav navbar-nav',
		          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			      //Process nav menu using our custom nav walker
			      'walker' => new wp_bootstrap_navwalker())
			    );
			    ?>
			</nav>
		</div>	<!-- .container -->
	</header>	<!-- .header -->
<div id="content" class="site-content container">
<?php /*
	if ( ! is_front_page() ) {
		?>
			<div class="container">
				<div class="row">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		<?php
	}
*/ ?>