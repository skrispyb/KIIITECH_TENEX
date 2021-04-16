<?php ?>
<article <?php post_class(); ?>>

  <div class="entry-title-category-wrapper">

    <div class="entry-thumbnail">
      <img src="wp-content/themes/KIIITECH_TENEX/images/home_&_archive_sm.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image small home1">
      <img src="wp-content/themes/KIIITECH_TENEX/images/home_&_archive_md.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image medium home2">
      <img src="wp-content/themes/KIIITECH_TENEX/images/home_&_archive_lg.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image large home3">
      <img src="wp-content/themes/KIIITECH_TENEX/images/calendar_&_booking_sm.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image small cal1">
      <img src="wp-content/themes/KIIITECH_TENEX/images/calendar_&_booking_md.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image medium cal2">
      <img src="wp-content/themes/KIIITECH_TENEX/images/calendar_&_booking_lg.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image large cal3">
      <img src="wp-content/themes/KIIITECH_TENEX/images/request_&_tenexbox_sm.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image small req1">
      <img src="wp-content/themes/KIIITECH_TENEX/images/request_&_tenexbox_md.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image medium req2">
      <img src="wp-content/themes/KIIITECH_TENEX/images/request_&_tenexbox_lg.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image large req3">
    </div>

    <div class="title-content">
      <h2 class="entry-title">
        <?php if (is_single()) :
          the_title();
        else :
        ?>
          <?php the_title(); ?>
        <?php endif ?>
      </h2>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>


</article>