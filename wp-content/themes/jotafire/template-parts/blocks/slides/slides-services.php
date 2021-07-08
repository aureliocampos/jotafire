<section class="section services__section">
  <div class="container">
    <h2 class="section__title--primary"><?php the_field('title_section'); ?></h2>
    <p class="section__subtitle--primary"><?php the_field('subtitle_section'); ?></p>

  <?php
  $featured_posts = get_field('slide_services');
    if( $featured_posts ): ?>
      <ul class="services__items services__slide">
        <?php foreach( $featured_posts as $featured_post ): 
            $permalink = get_permalink( $featured_post->ID );
            $title = get_the_title( $featured_post->ID );
            $custom_field = get_field( 'subtitulo_do_post', $featured_post->ID );
            ?>
            <li class="services__item">
              <a href="<?php echo esc_url( $permalink ); ?>">
                <article class="card-primary__article">
                  <figure class="card-primary__figure">
                    <?php if (has_post_thumbnail( $featured_post->ID ) ): ?>
                      <?php echo wp_get_attachment_image( get_post_thumbnail_id( $featured_post->ID ), array('','225'), "", array( "class" => "card-primary__image" ) ); ?>
                    <?php endif; ?>
                  </figure>
                  <h2 class="card-primary__title"><?php echo esc_html( $title ); ?></h2>
                  <p class="card-primary__excerpt"><?php echo esc_html( $custom_field ); ?></p>
                </article>
              </a>
            </li>

        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="section__cta">
      <?php 
        $link = get_field('cta_section');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
  </div>
</section>
