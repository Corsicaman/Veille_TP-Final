<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


		<?php
		$var = substr ( get_the_title() , 4 , 1  );
		echo '<a href="';
		echo (get_permalink());		
		echo '"><div class="unCours session'.$var.'">';          

		echo '<h2 class="cours-title">';
		echo(substr ( get_the_title() , 8 ));
		echo '</h2>';

		echo '<h2 class="entry-title">';
		echo(substr ( get_the_title() , 0 , 7 ));
		echo '</h2></div></a>';


		?>
