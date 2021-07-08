
<section class="section interleaved-card__section">
  <div class="container">
    <h2 class="section__title--primary"><?php the_field('title_section'); ?></h2>
    <p class="section__subtitle--primary"><?php the_field('subtitle_section'); ?></p>

    <?php if( have_rows('cards_interleaved') ): ?>
    <ul class="interleaved-card__items">
    <?php while( have_rows('cards_interleaved') ): the_row(); ?>
        <li class="interleaved-card__item">
          <article class="interleaved-card__card">
            <figure class="interleaved-card__figure">
              <?php 
                $image = get_sub_field('image_card');
                if( !empty( $image ) ): ?>
                <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="interleaved-card__image embed-responsive" />
              <?php endif; ?>
            </figure>
            <div class="interleaved-card__description">
              <h2 class="interleaved-card__title"><?php the_sub_field('title_card'); ?></h2>
              <small class="interleaved-card__subtitle"><?php the_sub_field('subtitle_card'); ?></small>
              <div class="interleaved-card__text"><?php the_sub_field('text_card'); ?></div>
              <?php 
                $link = get_sub_field('button_card');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button__primary interleaved-card__button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?> 
            </div>
          </article>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
  </div>
</section>
