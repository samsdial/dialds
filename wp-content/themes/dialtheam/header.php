<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div class="navbar navbar-expand-md navbar-dark fixed-top" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<!--<a class="skip-link screen-reader-text sr-only" href="#content"><?php /*esc_html_e( 'Skip to content', 'understrap' ); */?></a>-->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top header_site">
		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		    <?php endif; ?>
					<?php if ( ! has_custom_logo() ) { ?>
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="navbar-brand mb-0">
                                <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                            </h1>
						<?php else : ?>
                            <div class="box_logo cl--white">
                                <span class="logo_site" style="background-image: url(<?php echo the_field('logo_header', 'options'); ?>)"></span>
                                <span class="title_web">
                                    <div class="txt_upper dialtxt"><?php bloginfo( 'name' ); ?></div>
                                    <div class="txt_size--min"> WEB / APP</div>
                                </span>
                                <a class="btn_ghost" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                            </div>
						<?php endif; ?>
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
<!--
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
				</button>-->
                <button type="button" id="trigger-overlay" class="overlay-close navbar_btn cl--white navbar_btn--open">
                    <svg id="icon-menu" viewBox="0 0 24 13" width="100%" height="100%">
                        <title>menu</title>
                        <path d="M.75 1.515h22.498a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM23.248 5.265H8.168a.75.75 0 0 0 0 1.5h15.08a.75.75 0 0 0 0-1.5zM23.248 10.514H4.322a.75.75 0 0 0 0 1.5h18.926a.75.75 0 0 0 0-1.5z"></path>
                    </svg>
                </button>
				<!-- The WordPress Menu goes here -->
	<!--			--><?php /*wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav  ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); */?>
<!--			--><?php /*wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav  ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); */?>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
    <div class="overlay overlay_contentpush">
        <button type="button" class="overlay_close cl--white navbar_btn">
            <svg id="icon-close" viewBox="0 0 24 24" width="100%" height="100%">
                <title>close</title>
                <path d="M21 4.565L19.435 3 12 10.435 4.565 3 3 4.565 10.435 12 3 19.435 4.565 21 12 13.565 19.435 21 21 19.435 13.565 12z"></path>
            </svg>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'navbar_full',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => '',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'walker'          => new understrap_WP_Bootstrap_Navwalker(),
            )
        ); ?>

    </div>
