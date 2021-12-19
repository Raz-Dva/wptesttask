<?php get_header() ?>

  <div class="main_bckg">
    <img src="<?php echo get_stylesheet_directory_uri()?>/img/background_main_block.svg" alt="">
  </div>
  <main>
    <div class="main_head">
      <h1 class="main_block_title">What is Lorem Ipsum?</h1>
      <p class="main_block_text">Lorem Ipsum jest tekstem stosowanym jako
        przykładowy wypełniacz w przemyśle poligraficznym.</p>
    </div>
    <h2 class="title_main_text" id="who">Do czego tego użyć?</h2>
    <div class="main_text">
      <p>
        Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce
        zobaczyć sam jej wygląd. Jedną z mocnych stron używania Lorem Ipsum jest to, że ma wiele różnych „kombinacji”
        zdań, słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, sprawiającego, że wygląda to „zbyt
        czytelnie” po polsku. Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i wpisanie
        w
        internetowej wyszukiwarce 'lorem ipsum' spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie.
        Wiele
        wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne
        wstawki itd).
      </p>
      <p class="p_diff">Skąd się to wzięło?</p>
      <p>
        W przeciwieństwie do rozpowszechnionych opinii, Lorem Ipsum nie jest tylko
        przypadkowym tekstem. Ma ono korzenie
        w klasycznej łacińskiej literaturze z 45 roku przed Chrystusem, czyli ponad 2000 lat temu! Richard McClintock,
        wykładowca łaciny na uniwersytecie Hampden-Sydney w Virginii, przyjrzał się uważniej jednemu z najbardziej
        niejasnych słów w Lorem Ipsum – consectetur – i po wielu poszukiwaniach odnalazł niezaprzeczalne źródło:
      </p>
      <p>Lorem Ipsum pochodzi z fragmentów (1.10.32 i 1.10.33) „de Finibus Bonorum et Malorum”, czyli „O granicy dobra i
        zła”, napisanej właśnie w 45 p.n.e. przez Cycerona. Jest to bardzo popularna w czasach renesansu rozprawa na
        temat
        etyki. Pierwszy wiersz Lorem Ipsum, „Lorem ipsum dolor sit amet...” pochodzi właśnie z sekcji 1.10.32.</p>
    </div>
    <h2 class="title_main_text" id="realization">Realizacje</h2>
    <div class="main_projects">

<?php
  $query = new WP_Query(array(
    'posts_per_page' => 4,
  ))
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts()
) : $query->the_post(); ?>
      <div class="project">
        <div class="wrap_img_project">
          <a href="<?php the_permalink() ?>">
          <?php if( has_post_thumbnail() ) {
            $img_url = get_the_post_thumbnail_url();
          }
          else{
            $img_url = 'https://ih0.redbubble.net/image.343726250.4611/flat,800x800,075,f.jpg';
          } 
          ?>
          <img src="<?php echo $img_url ?>" alt="">
        </a>
        </div>
        <p class="title_project"><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></p>
      </div>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      
    </div>
  </main>

<?php get_footer() ?>
