<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/1417b21e-36f3-4fad-b563-1a2138245b89.css"/>
	<title>
		<?php wp_title('&laquo;', true, 'right'); ?>
		<?php bloginfo('name'); ?>
	</title>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="wrapper">
		<div class="search">
			<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search', 'woocommerce' ); ?>" />
					<input type="hidden" id="searchsubmit" value="<?php echo esc_attr__( 'Zoeken' ); ?>" />
					<input type="hidden" name="post_type" value="product" />
			</form>
		</div>
		<menu class="mnav">
			<?php {
				$defaults = array(
					'theme_location'  => '',
					'menu'            => 'mnav',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => '',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults ); }
			?>
		</menu>
	</div>
</div>