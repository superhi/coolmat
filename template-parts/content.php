<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */
global $item_number;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- 1. our title on the left -->
		<h1 class="entry-title">
			<?php 
				// in here we can write php code and mix it in with our html
				the_title();
			?>
		</h1>

		<!-- here we grab our food menu item number -->
		<div class="entry-number">
			<span>
				<?php echo $item_number; ?>
			</span>
		</div>

		<!-- 2. our price (content) on the right -->
		<div class="entry-price">
			<?php the_content(); ?>
		</div>
		
	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
