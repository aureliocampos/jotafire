<?php get_header(); ?>
  <main id="main-content" class="wrap-content">
    <section class="banner banner__primary">
      <div class=" container banner__container banner__background">
        <img src="#" alt="" sizes="" srcset="" />
        <div class="banner__description">
          <h1 class="banner__title--primary">Nossa missão é a sua segurança</h1>
          <p class="banner__subtitle--primary">A Jotafire possui um time de profissionais especializados em sistemas de segurança e combate a incêndio,para que você tenha total segurança sem correr riscos de acidentes e com todo apoio da nossa equipe técnica para proteger o seu negócio,empresa ou condomínio.</p>
          <a href="http://" class="button__primary"> Solicite um orçamento</a>
        </div>
      </div>
      <span>Icon</span>
    </section>

    <section class="section icons__section container">
      <ul class="icons__items">
        <li class="icons__item">
          <img src="<?php echo get_template_directory_uri()."/src/images/icon-profissionais.png"?>" alt="" sizes="" srcset="" class="icons__image">
          <h3 class="icons__title">Profissionais Capacitados</h3>
        </li>
        <li class="icons__item">
          <img src="<?php echo get_template_directory_uri()."/src/images/icon-24hs.png"?>" alt="" sizes="" srcset="" class="icons__image">
          <h3 class="icons__title">Atendimento 24h</h3>
        </li>
        <li class="icons__item">
          <img src="<?php echo get_template_directory_uri()."/src/images/icon-sistemas.png"?>" alt="" sizes="" srcset="" class="icons__image">
          <h3 class="icons__title">Sistemas modernos</h3>
        </li>
        <li class="icons__item">
          <img src="<?php echo get_template_directory_uri()."/src/images/icon-legalizacao.png"?>" alt="" sizes="" srcset="" class="icons__image">
          <h3 class="icons__title">Legalização perante órgãos regulatórios</h3>
        </li>
      </ul>
    </section>

    <section class="section services__section">
      <div class="container">
        <ul class="services__items services__slide">
          <li class="services__item">
            <article class="services__article">
              <figure class="services__figure">
                <img src="<?php echo get_template_directory_uri()."/src/images/placeholder-destaque_2x.png"?>" alt="" sizes="" srcset="" class="services__image">
              </figure>
              <h2 class="services__title">Sistema Sprinkler</h2>
              <p class="services__excerpt">Rápida detecção e eficincia comprovada contra incêndio.</p>
            </article>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php get_footer(); ?>


