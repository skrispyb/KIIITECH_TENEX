<?php ?>


<article <?php post_class(); ?>>


  <div class="entry-thumbnail">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>

  <div class="entry-title-category-wrapper">
    <h2 class="entry-title">
      <?php if (is_single()) :
        the_title();
      else :
      ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?></a>
      <?php endif; ?>
    </h2>
  </div>

  <div class="entry-content">
    <?php
    if (!is_single()) :
      the_excerpt();
    ?>
      <div class="category-tag-wrapper">
        <div class="category-wrapper">Category:<br>
          Tag:
        </div>
        <div class="tags-wrapper">
          <?php the_category(' '); ?><br>
          <?php the_tags(" ", " , "); ?>
        </div>
      </div>
      <div class="readmore">
        <a href="<?php the_permalink(); ?>">[ read more ]</a>
      </div>
    <?php
    else :
      the_content();
      ?>
      <div class="category-tag-wrapper">
      <div class="category-wrapper">Category:<br>
        Tag:
      </div>
      <div class="tags-wrapper">
        <?php the_category(' '); ?><br>
        <?php the_tags(" ", " , "); ?>
      </div>
    </div>
    <?php
    endif;
    ?>
  </div>

</article>