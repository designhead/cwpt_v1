<?php 
/*
 *
 * @package cwpt
 */

get_header(); ?>

<div id="body">
	<div class="wrapper">
		<div class="content post-category">
			<?php if ( have_posts() ) : ?>
				<div class="header">
					<h1><?php printf( __( '%s', 'cwpt' ), single_cat_title( '', false ) ); ?></h1>
	
					<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="description"><?php echo category_description(); ?></div>
					<?php endif; ?>
				</div>
	
				<?php while ( have_posts() ) : the_post(); ?>
					<div <?php post_class() ?>>
						<?php the_post_thumbnail('full', array('class' => 'featured-image')); ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h2><?php the_title() ?></h2></a>
						<span class="date"><?php the_time('j.m.Y') ?></span>
						<div class="excerpt"><?php the_excerpt() ?></div>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more">Read more</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div id="aside">
			... aside ...
		</div>
	</div>
</div>

<?php get_footer(); ?>