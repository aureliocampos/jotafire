<section class="section content-card__section">
  <div class="container">
    <h2 class="section__title--secondary"><?php the_field('title_section'); ?></h2>

    <ul class="content-card__items">
      <li class="content-card__item">
        <a href="http://">
          <article class="content-card__article">
            <figure class="content-card__figure">
              <img loading="lazy" src="<?php echo get_template_directory_uri()."/src/images/placeholder-destaque_2x.png"?>" alt="" sizes="" srcset="" class="content-card__image embed-responsive">
            </figure>
            <div class="content-card__info">
              <h3 class="content-card__tag">Empresa</h3>
              <time class="content-card__time" datetime="24/06/21">jun, 2021</time>
            </div>
            <h2 class="content-card__title">CONDOMÍNIO DO EDIFÍCIO JARDIM DE IPANEMA</h2>
            <p class="content-card__excerpt"></p>
          </article>
        </a>
      </li>
    </ul>

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