<?php
/*
Template Name: Blog Single Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="wrap container page" role="document">
	<header class="post">
		<div class="headerbg" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id( $post->ID, 'large' ) ); ?>);"></div>
	  	<div class="inner">
	  		<?php get_template_part('templates/page', 'header'); ?>
	  		<ul class="postnav">
         		<li class="button older"><?php previous_post_link ( '%link', '&laquo; Previous') ?></li>
         		<li class="button newer"><?php next_post_link( '%link', 'Next &raquo;' ) ?></li>
         	</ul>
         	<?php get_search_form(); ?>
	  	</div>
	</header>
	
	<div class="page inner">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; ?>

