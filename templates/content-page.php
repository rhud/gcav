<?php while (have_posts()) : the_post(); ?>
<div class="wrap container page about" role="document">
	<?php
		global $post;
		    $post_slug=$post->post_name;
	?>
	<header class="<?=$post_slug;?>">
	  <div class="inner">
	  	<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<?php get_template_part('templates/page', 'header'); ?>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</header>
	
	<div class="page inner">
		<main class="main" role="main">
				<div class="content">
			  	<?php the_content(); ?>
			  </div>
		</main>
	</div>

<?php endwhile; ?>
