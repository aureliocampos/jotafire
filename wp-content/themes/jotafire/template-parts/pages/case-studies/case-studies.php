<div class="section section-default-case-studies">
  <div class="container">

    

    <section class="section__cases">
    <h2 class="section__title--primary">Condomínios</h2>
      <?php 
        $the_query = new WP_Query(array(
          'post_type' => 'estudos-de-caso',
          'post_status' => 'publish',
          'posts_per_page' => 99,
          'cat' => 4
        )); ?>
      <?php if ( $the_query->have_posts() ) : ?>
        <ul class="content-card__items grid--posts cases-condominio">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="content-card__item">
              <article class="content-card__article">
                <a href="<?php the_permalink(); ?>">
                  <figure class="content-card__figure">
                    <!-- <img loading="lazy" src="<?php echo get_template_directory_uri()."/src/images/placeholder-destaque_2x.png"?>" alt="" sizes="" srcset="" class="content-card__image embed-responsive"> -->
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image', 'lazy' => 'loading']); ?>
                  </figure>
                </a>
                <div class="content-card__info">
                  <h3 class="content-card__tag">Empresa</h3>
                  <time class="content-card__time" datetime="24/06/21">jun, 2021</time>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <h2 class="content-card__title"><?php the_title(); ?></h2>
                  <div class="content-card__excerpt"><?php the_excerpt(); ?></div>
                </a>
              </article>
            
            </li>
            <?php endwhile; ?>
          </ul>         

          <button id="loadmore">Mostrar mais</button>
        <?php wp_reset_postdata(); ?>
       
      <?php else : ?>
        <p><?php _e( 'Infelizmente ainda não possuimos posts com essa categoria, volte mais tarde.' ); ?></p>
      <?php endif; ?>
    </section>

    <hr style="margin: 4em 0;">
  </div>
</div>
