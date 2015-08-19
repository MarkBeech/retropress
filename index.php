<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
 <body>
<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
</div>

<div id="leftnavigation">
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
					<?php endif; ?>
 </div>
 
<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_time('Y-m-d') ?> : <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content(); ?>		</div>
				</div>

			<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link() ?></div>
			<div class="alignright"><?php previous_posts_link() ?></div>
		</div>

	<?php else : ?>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>

<div id="footer">
			&copy; <?php echo alpha_and_omega(); ?> <?php echo get_bloginfo('name'); ?><div id="unne"> Powered by <a href="http://wordpress.org/">WordPress</a>, themed by <a href="https://mark.beech.org.uk">Mark Beech</a>.
	<p><img style="border:0;width:88px;height:31px"
			src="//jigsaw.w3.org/css-validator/images/vcss-blue"
			alt="Valid CSS!" />
</p></div>
</div>

</body>
</html>
