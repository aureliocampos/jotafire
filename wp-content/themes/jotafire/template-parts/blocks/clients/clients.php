<section class="section logos__section">
  <div class="container">
    <h2 class="section__title--secondary"><?php the_field('title_section'); ?></h2>
    <?php 
      $images = get_field('logos');
      if( $images ): ?>
          <ul class="logos__items">
              <?php foreach( $images as $image ): ?>
                  <li class="logos__item">
                     <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="logos__image embed-responsive"/>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
  </div>
</section>

