<?php
/**
 * Le header du thème enfant
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900i" rel="stylesheet">
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
                        <p>Programmation et veille technologique</p>
                    </li>
                    <li id="soustitre">
                        <p>Thème Wordpress personalisé</p>
                    </li>
                    <div class="separateur separateur_01"></div>
                    <li id="soustitre2">
                        <p>TP 2 - Session hiver 2018</p>
                    </li>
                    <div class="separateur separateur_02"></div>
                    <a href="/Veille_TP-Final">
                        <li>
                            <p>Page d'accueil</p>
                        </li>
                    </a>
                    <a href="/Veille_TP-Final/cours/">
                        <li>
                            <p>Grille des cours</p>
                        </li>
                    </a>
                    <a href="/Veille_TP-Final/cours/tim-151/">
                        <li>
                            <p>Cours de création web</p>
                        </li>
                    </a>
                    <a href="/Veille_TP-Final/cours/tim-243/">
                        <li>
                            <p>Cours de programmation web</p>
                        </li>
                    </a>
                    <a href="/Veille_TP-Final/cours/tim-554/">
                        <li>
                            <p>Cours de production web</p>
                        </li>
                    </a>
                    <div class="separateur separateur_03"></div>
                    <a target="_blank" href="http://www.lucas-theillet.com">
                        <li>
                            <p>Contact</p>
                        </li>
                    </a>
                </ul>
            </div>
        </nav>

<script>
	$("#checkMenu").click(function() {
    if ($(this).is(':checked')) {
	console.log("Allo");
        $("#titre > p").addClass("titreAnim");
        $(".separateur_01").addClass("sepa_sitePortfolio");
        $("#soustitre2").addClass("txt_sitePortfolio");
        $("#soustitre").addClass("txt_sousTitre");
    } else {
	console.log("Allo2");
        $("#titre > p").removeClass("titreAnim");
        $(".separateur_01").removeClass("sepa_sitePortfolio");
        $("#soustitre2").removeClass("txt_sitePortfolio");
        $("#soustitre").removeClass("txt_sousTitre");
    }
});
</script>
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
