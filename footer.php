<footer class="site-footer" id="site-footer">


  <div class="menu-container-footer">


    <div class="footer-logo">
      <div class="logo">
        <?php if (has_custom_logo()) : ?>

          <a class="site-title" href="<?php home_url('/'); ?>">
            <?php the_custom_logo(); ?>
          </a>
        <?php else : ?>
          <a class="site-title" href="<?php home_url('/'); ?>">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>

      <?php
      wp_nav_menu(array(

        'theme_location'      =>  'main_social',
        'container'           =>  'div',
        'container_class'     =>  'menu-social',
        'container_id'        =>  'menu-social',
        'link_before'       =>    '<span class="screen-reader-text">',
        'link_after'       =>    '<span class="screen-reader-text">'
      ));

      ?>
    </div>

    <?php

    wp_nav_menu(array(

      'theme_location'      =>  'main_footer',
      'container'           =>  'div',
      'container_class'     =>  'menu-main-footer',
      'container_id'        =>  'menu-main-in-footer',
      'menu_class'          =>  'menu-list',
    ));
    ?>

    <div class="copyright">
      <p>All rights reserved &#169; 2021</p>

    </div>
</footer>
</main> <!-- .site-main -->

</div>
</div> <!-- .content-area -->

<?php wp_footer(); ?>

</body>
</html>