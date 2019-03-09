<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


        <nav id="menu_mobile">
            <div id="menuToggle">
                <input type="checkbox" id="checkMenu">
                <span id="span1"></span>
                <span></span>
                <span></span>
                <ul id="menuMob">
                    <li id="titre">
                        <p>LUCAS THEILLET</p>
                    </li>
                    <li id="soustitre">
                        <p>Conception visuelle</p>
                    </li>
                    <div class="separateur separateur_01"></div>
                    <li id="soustitre2">
                        <p>Site portfolio © 2014-<script>var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)</script></p>
                    </li>
                    <div class="separateur separateur_02"></div>
                    <a href="index.htm">
                        <li><i class="material-icons">home</i>
                            <p>Accueil</p>
                        </li>
                    </a>
                    <a href="video.htm">
                        <li><i class="material-icons">videocam</i>
                            <p>Production vidéo</p>
                        </li>
                    </a>
                    <a href="photographie.htm">
                        <li><i class="material-icons">photo_camera</i>
                            <p>Photographie</p>
                        </li>
                    </a>
                    <a href="design.htm">
                        <li><i class="material-icons">create</i>
                            <p>Design graphique</p>
                        </li>
                    </a>
                    <a href="web.htm">
                        <li class="actif"><i class="material-icons">laptop_mac</i>
                            <p>Conception web</p>
                        </li>
                    </a>
                    <div class="separateur separateur_03"></div>
                    <a href="contact.htm">
                        <li><i class="material-icons">phone</i>
                            <p>Contact</p>
                        </li>
                    </a>
                </ul>
            </div>
        </nav>


	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
