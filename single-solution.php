<?php
/*
Template Name: Blog Single Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="wrap container page" role="document">
	<?php
		global $post;
		    $post_slug=$post->post_name;
		    $heroImg = types_render_field("hero-img", array("raw"=>"true"));
		    if($heroImg == "") {
		    	$heroImg = types_render_field("page-img", array("raw"=>"true"));
		    }
	?>
	<header class="<?=$post_slug;?>" style="background-image:url(<?=$heroImg;?>);">
	  	<div class="inner">
	  		<?php get_template_part('templates/page', 'header'); ?>
	  		<?php 
				$hero = types_render_field("hero-msg", array("raw"=>"true"));
				if(!is_null($hero)) {
					?><h2 class="hero"><?=$hero;?></h2><?
				}
			?>
		</div>
	</header>
	
	<div class="page inner">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; ?>
