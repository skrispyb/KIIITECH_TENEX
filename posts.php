<?php 

/* Template Name: Blogs */

get_header(); ?>



<section class = "blogs_slider">
<h1 class="blogs-latest">Blogs</h1>


<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
</section>

<section class="inner-posts">
<?php 
  $args = array(
    'post_type' => 'post',
    'posts_per_page'    =>  '6',    
    'order' => 'DESC',
    'orderby' => 'ID',

  ); 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-blog-posts');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>
<?php
get_footer();