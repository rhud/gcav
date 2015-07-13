<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap hero" role="document">
	<div id="slider" class="main">
		<?php
			echo get_new_royalslider(3);
		?>
		
	</div>
</div>

<div class="wrap home-content">
	<div class="downdown"></div>
	<div class="gcanim"></div>
	
	<section class="solutions">
		<div class="twinkling">
			<div class="inner">
				<?php $recent = new WP_Query("page_id=114"); while($recent->have_posts()) : $recent->the_post();?>
				<h1><?php the_title(); ?></h1>
				<h3><?=types_render_field("excerpt", array("raw"=>"true"))?></h3>
				<?php endwhile; ?>
				
				<?php
				$type = 'solution';
				$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1);
				$my_query = null;
				$my_query = new WP_Query($args);
				$count = 1;
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <div class="col-md-6 col-sm-6 col-lg-3">
				    	<div class="solution">
				    		<div class="sol-img" style="background-image:url(<?=types_render_field("solution-img", array("raw"=>"true"))?>)"></div>
				    		<div class="sol-desc">
				    			<h2><?php the_title(); ?></h2>
				    			<p><?php the_excerpt(); ?> </p>
				    			<a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Read More</a>
				    		</div>
				    	</div>
				   	</div>
				   	<?php
				   	if($count == 2) {
				   		?>
				   		<div class="clearfix visible-md visible-sm"></div>
				   	<?php
				   	}
				   	$count++;
				    	
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</section>



	




