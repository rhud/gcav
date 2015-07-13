<article <?php post_class(); ?>>
  	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<span class="date"><?php the_date('j F, Y'); ?></span>
	<?php the_excerpt(); ?>
</article>
