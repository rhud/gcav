<div class="wrap container page" role="document">

<header class="error" style="background-image:url(/assets/images/people.blur.jpg);">
  	<div class="inner">
  		<div class="page-header">
			<h1>Search Results</h1>
			<?php get_search_form(); ?>
		</div>
  	</div>
</header>

<div class="page inner">
	<div class="content">
		<?php if (!have_posts()) : ?>
		  <h3><?php _e('Sorry, no results were found.', 'sage'); ?></h3>
		<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/content', 'search'); ?>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>
	</div>
</div>









	
	