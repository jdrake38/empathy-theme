<?php
/**
 * 
 * Template Part: Index Loop
 * Description: Loop code for the index.php template.
 * 
 * @example <?php get_template_part( 'templates/index', 'loop'); ?>
 * 
 * @author  Joshua Michaels for studio.bio <info@studio.bio>
 * @since   1.0.0
 * @version 1.3
 * @license WTFPL
 * 
 * @see     https://konstantin.blog/2013/get_template_part/
 *          http://buildwpyourself.com/get-template-part/
 * 
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

		<header class="article-header">

			<h1 class="page-title" itemprop="headline">
		
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			
			</h1>
			
			<?php get_template_part( 'templates/byline'); ?>

		</header>

		<section class="index-entry-content">
									
			<?php the_post_thumbnail(); ?>

			<section class="excerpt">

				<?php echo wp_trim_words( get_the_content(), 45, '...' ); ?>

			</section>

		</section>

		<footer class="article-footer">

            <?php get_template_part( 'templates/category-tags'); ?>

		</footer>

		<hr/>

	</article>

<?php endwhile; ?>

    <?php plate_page_navi( $wp_query ); ?>

<?php else : ?>

    <?php get_template_part( 'templates/404'); ?>

<?php endif; ?>