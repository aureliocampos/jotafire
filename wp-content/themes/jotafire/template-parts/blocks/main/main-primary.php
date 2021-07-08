<section class="banner banner__primary">
  <div class=" container banner__container banner__background">
    <img src="#" alt="" sizes="" srcset="" />
    <div class="banner__description">
      <h1 class="banner__title--primary"><?php the_field('titulo'); ?></h1>
      <div class="banner__subtitle--primary"><?php the_field('texto'); ?></div>
      <?php 
        $link = get_field('botao');
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
