<?php
get_header();
/* Template Name: Home */

?>
<!-- ************************* Hero Image *******************************  -->



<section class="hero-image">
  <?php
  $args = array(
    'post_type'             =>  'upper_pages',
    'name'    => 'tenant',
  );
  $my_query = new WP_Query($args);

  if ($my_query->have_posts()) :
    while ($my_query->have_posts()) :
      $my_query->the_post();
      get_template_part('template-parts/up');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
  ?>
</section>


<!-- ************************* Upper Posts Section *******************************  -->
<section class="upper-posts">
  <?php
  $super_query = new WP_Query(array(
    'post_type'     =>  'upper_posts',
    'order'         =>  'ASC'
  ));

  if ($super_query->have_posts()) :
    while ($super_query->have_posts()) :
      $super_query->the_post();
      get_template_part('template-parts/content-upper-posts');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif; ?>
</section>

<!-- ************************* Blogs Section ******************************* -->
<h2 class="post-blog">Latest Blogs</h2>
<section class="blog-area">

  <?php

  $super_query = new WP_Query(array(

    'post_type' => 'post',
    'posts_per_page' => 3,
  ));

  if ($super_query->have_posts()) :
    while ($super_query->have_posts()) :
      $super_query->the_post();
      get_template_part('template-parts/content-blog-posts');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;

  ?>

</section>
<section class="viewmore">
  <a href="<?php echo site_url() . '/Blogs' ?>" id="viewmore">VIEW MORE BLOGS&nbsp;&nbsp; &#8594;</a>
</section>





<!-- ****************** Review Form Showcase *********************************** -->
<div class="reviews_showcase">
  <h2>Reviews</h2>
  <?php echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="4"]'); ?>

  <div class="review">
    <a href="<?php echo site_url() . '/Reviews' ?>" id="review">LEAVE A REVIEW&nbsp;&nbsp; &#8594;</a>
  </div>

</div>

<!-- ******************************* Ninja Form *************************************** -->
<section class="ninja-form1" id="contact-us">
  <h2>Contact Form</h2>
  <?php
  $args = array(
    'post_type'             =>  'page',
    'pagename'                =>  'Form1',

  );

  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :

    while ($my_query->have_posts()) :
      $my_query->the_post();
      the_content();
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');

  endif;
  ?>
</section>

<!-- ************************************* -->
<!-- <form action="https://formspree.io/f/mnqobvrw" method="POST">
                <div class="contact_name">
                    <label for="name">
                        Your name:
                    </label>
                    <input type="text" id="name" name="_replyto" required>
                </div>
                <div class="contact_email">
                    <label for="email">
                        Your email:
                    </label>
                    <input type="text" id="email" name="_replyto" required>
                </div>
                <div class="contact_message">
                    <label for="message">
                        Your message:
                    </label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Send</button>
            </form> -->

<?php

get_footer();
