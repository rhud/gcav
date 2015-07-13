	<section class="brands">
		<div class="inner">
			<h1>Brands</h1>
			<h3><?php echo do_shortcode('[snippet slug="brands" /]'); ?></h3>
			
			<div class="logos">
				<?php
					$type = 'brands';
					$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
					    <a href="<?=types_render_field("website-link", array("raw"=>"true"))?>" target="_blank"><img src="<?=types_render_field("brand-icon")?>"/></a>
					  <? endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>

		</div>
	</section>
	
</div>


	<footer class="content-info" role="contentinfo">
	  <div class="inner">
	  	<div class="col-md-4 services">
	  		<h3>Our Services</h3>
	  		<?php
			$type = 'services';
			$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); 
			  	?>
			    <a><?php the_title(); ?></a>
			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
	  	</div>
	  	<div class="col-md-4 contact">
	  		<?php echo do_shortcode('[snippet slug="contact" /]'); ?>
  		</div>
  		<div class="col-md-4 copyright">
  			<?php echo do_shortcode('[snippet slug="copyright" /]'); ?>
		</div>
  
	    
	  </div>
	</footer>

</div> <!-- /.wrap.container -->
<?php wp_footer(); ?>
