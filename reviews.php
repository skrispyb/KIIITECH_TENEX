<?php

/* Template Name: Reviews */

get_header(); ?>
<div class="about-us">
	<h1>Share Your Experience</h1>
</div>

<div class="review-page">
	<?php while (have_posts()) : the_post(); ?>
	
		<?php // get_template_part( 'content', 'page' );
		?>
		<?php the_content(); ?>
	
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>