<?php while (have_posts()) : the_post(); ?>
<div class="wrap container page" role="document">
	<?php
		global $post;
		    $post_slug=$post->post_name;
	?>
	<header class="<?=$post_slug;?>">
	  	<div class="inner">
	  		<?php get_template_part('templates/page', 'header'); ?>
		</div>
	</header>
	
	<div class="page inner">
		<div class="content">
			<?php 
				$hero = types_render_field("hero-msg", array("raw"=>"true"));
				if(!is_null($hero)) {
					?><h2 class="hero"><?=$hero;?></h2><?
				}
			?>
		  	<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; ?>
