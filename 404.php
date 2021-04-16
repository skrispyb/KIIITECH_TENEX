<?php 

get_header(); 

if ( is_404() ) :
    ?> <div class="no_content_image">
       <?php $args = array(
          'post_type'             =>  'upper_pages',
          'name'    => 'about'
        
        );
        $my_query = new WP_Query( $args );
        while ( $my_query->have_posts() ) :
            $my_query->the_post();
            the_post_thumbnail();
        endwhile;
        ?>
    </div>    

  <div class="back_to_home">404 page not found. Try something else.<br>
  Or go back to <a href="<?php echo home_url(); ?>">homepage.</a> 
</div>
  <?php
endif;  

get_footer();


