
<?php 

/* Template Name: About KIIITech */

get_header(); ?>

<section class="about-us">
<h1>About KIIITech</h1>

</section>
<!-- **************************Upper Post******************************** -->
<section class="intro">
 <?php 
  $args = array(
    'post_type'             =>  'upper_pages',
    'name'    => 'about'
  

  ); 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      the_content();
      the_post_thumbnail();
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>

<!-- *************************Team Members***************************** -->
<h1 class="our_team">Our Team</h1>
<section class="team-members">

<?php 
  $args = array(
    'post_type'             =>  'team_member',
    'posts_per_page'    =>  '6',    
    'order' => 'ASC',
    'orderby' => 'ID',

  ); 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-team-member');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>
<?php
get_footer();