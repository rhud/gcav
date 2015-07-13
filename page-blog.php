<?php
/**
 * Template Name: Blog Page
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
	  		<?php get_search_form(); ?>
		</div>
	</header>

<?php endwhile; ?>


<div class="wrap container page" role="document">
	<div class="page inner">
		<div class="content">
			<?php
			$pageid = get_queried_object_id();
			$meta = get_post_meta( $pageid, 'WP_Catid','true' );
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array( 'posts_per_page' => 10, 'category_name' => $meta, 'paged' => $paged, 'post_type' => 'post' );
    		
    		$postslist = new WP_Query( $args );

    		if ( $postslist->have_posts() ) :
    			?><ul class="postnav">
             		<li class="button older"><?php next_posts_link( '&laquo; Older Posts', $postslist->max_num_pages ); ?></li>
             		<li class="button newer"><?php previous_posts_link( 'Newer Posts &raquo;' ); ?></li>
             	</ul>
        		<? while ( $postslist->have_posts() ) : $postslist->the_post(); 
					?>
					<div class="col-md-6 blogentry">
						<div class="blogimg">
							<a href="<?php the_permalink(); ?>"><? the_post_thumbnail('blog-img'); ?></a>
						</div>
						<?php get_template_part('templates/content', 'search'); ?>
					</div>
				<?php endwhile; ?>  
				<div class="clearfix"></div>
				<ul class="postnav">
             		<li class="button older"><?php next_posts_link( '&laquo; Older Posts', $postslist->max_num_pages ); ?></li>
             		<li class="button newer"><?php previous_posts_link( 'Newer Posts &raquo;' ); ?></li>
             	</ul>
        		<?php wp_reset_postdata();
    		endif;
    		?>
		</div>
	</div>
</div>			
