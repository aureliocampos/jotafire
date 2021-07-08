<section class="section icons__section container">
  <?php if( have_rows('module_icon_text') ): ?>
    <ul class="icons__items">
      <?php while( have_rows('module_icon_text') ): the_row(); ?>
          <li class="icons__item">
            <?php 
              $image = get_sub_field('icon');
              if( !empty( $image ) ): ?>
                <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="icons__image" />
              <?php endif; ?>
            <h3 class="icons__title"><?php the_sub_field('text'); ?></h3>

          </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</section>