
<section class="section projects-card__section">
  <div class="container">
    <h2 class="section__title--primary"><?php the_field('title_section'); ?></h2>
    <div class="section__subtitle--primary"><?php the_field('subtitle_section'); ?></div>

    <?php if( have_rows('cards_projects') ): ?>
      <ul class="projects-card__items">
        <?php while( have_rows('cards_projects') ): the_row(); ?>
            <li class="projects-card__item">
              <article class="projects-card__card">
                <figure class="projects-card__figure">
                  <?php 
                    $image = get_sub_field('imagem');
                    if( !empty( $image ) ): ?>
                    <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="projects-card__image embed-responsive" />
                  <?php endif; ?>
                </figure>
                <div class="projects-card__description">
                  <h2 class="projects-card__title"><?php the_sub_field('title'); ?></h2>
                  <div class="projects-card__text"><?php the_sub_field('text'); ?></div>
                </div>
              </article>
            </li>
        <?php endwhile; ?>
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
