<section class="section horizontal-card__section">
  <div class="container">
    <?php
      $featured_posts = get_field('servicos');
        if( $featured_posts ): ?>
          <ul class="horizontal-card__items">
            <?php foreach( $featured_posts as $featured_post ): 
                $permalink = get_permalink( $featured_post->ID );
                $title = get_the_title( $featured_post->ID );
                $excerpt = get_the_excerpt( $featured_post->ID );
                $custom_field = get_field( 'subtitulo_do_post', $featured_post->ID );
                ?>
            <li class="horizontal-card__item">
              <article class="horizontal-card__article">
                <figure class="horizontal-card__figure">
                  <?php if (has_post_thumbnail( $featured_post->ID ) ): ?>
                      <?php echo wp_get_attachment_image( get_post_thumbnail_id( $featured_post->ID ), array('','344'), "", array( "class" => "horizontal-card__image" ) ); ?>
                    <?php endif; ?>
                </figure>
                <div class="horizontal-card__description">
                  <h2 class="horizontal-card__title"><?php echo esc_html( $title ); ?></h2>
                  <small class="horizontal-card__subtitle"><?php echo esc_html( $custom_field ); ?></small>
                  <p class="horizontal-card__text"><?php echo esc_html( $excerpt ); ?></p>
                  <a href="<?php echo esc_url( $permalink ); ?>" class="button__primary interleaved-card__button">Agendar Visita</a>
                </div>
                
              </article>
            </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
