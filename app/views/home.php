<?php
use App\utilities\Utilities;

 include_once './inc/header.php';

 ?>



        <div class="first_call wordTitle limitatorTitle">
            <h1 class="word animate-lettersTitle wordTitle limitatorTitle">AUMENTANDO AUTO-ESTIMAS E SIGNIFICANDO MOMENTOS COM <span style="color: #F0B648; font-style: italic; font-weight: 800;" class="dynamicWord">TATUAGENS</span>.</h1>

            <p class="animate-lettersText ">Projetos <span style="font-weight: 800;">exclusivos</span> feitos para você exibir por aí.</p>

            <button class="btn_one animate-lettersButton"><a href="portfolio" title="Link para página de portfólio">Visualizar Portfólio</a></button>
        </div>
    </div>
</section>

<main>
    <section class="about">
        <div class="box_one animate-boxOne">
            <h2>De olho no Artista</h2>
            <!-- <div>
                <img src="public/img/social/instagram.png" alt="" width="25">
                <img src="public/img/social/tiktok.png" alt=""  width="25">
                <img src="public/img/social/pinterest.png" alt=""  width="25">
            </div> -->
        </div>
        <span class="separator_orange animate-boxOne"></span>
        <article class="article_one animate-boxOne">
            <div class="perfil_box"><img src="public/img/social/leotatuador.jpeg" alt="Rapaz, tatuador, negro, de aparência jovem e sorridente. Com uma blusa amarela em uma foto editada com fundo amarelo, ao lado de um texto que conta um pouco de sua história" class="leo_perfil"></div class="perfil_text">
                <div class="limitator">
                    <p class="word">Olá, eu sou o  <span style="font-weight: 800;">Leonardo Barbosa</span>, tatuador profissional e apaixonado por arte e as formas de manifestá-la, seja na pele das pessoas ou no papel. Dediquei parte da minha vida a estudar o desenho, suas adaptações e formas para que eu possa deixar as pessoas mais felizes por gravarem em seus corpos uma linda representação do que elas amam, do que para elas tem algum significado ou aquilo que apenas as divertem.
                    </p>
                    <button class="btn_about animate-lettersButton"><a href="https://wa.me/5511932312488" target="_blank" title="Link para contato WhatsApp">Quero conhecer!</a></button>
                </div>
        </article>

        <article class="article_two animate-boxOne">
            <div class="banner_overlay box_two">
                <h2>A experiência de uma tattoo comigo</h2>
                <span class="separator_white"></span>
                <div class="limitatorTwo">
                    <p class="word">Valorizo a <span style="font-weight: 800;">boa experiência</span>, por isso, trago meus clientes para perto de cada etapa do projeto - Seja a conversa inicial em que me contará sua ideia de arte, até a elaboração do projeto digitalmente para que após aprovação possamos enfim marcarmos a tão esperada sessão de tattoo.</p>
                </div>
            </div>
        </article>
    </section>
</main>


<section class="my_work animate-boxOne">
    <h2>Conheça meu trabalho</h2>
    <span class="separator_orange"></span>
    
        <!-- Slider main container -->
        <div class="swiper mySwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper works_home">
            <!-- Slides -->
            <img src="public/img/works/killua.jpeg"  loading="lazy" alt="Tatuagem do personagem Killua do anime HunterXHunter"  class="swiper-slide">    
            <img src="public/img/works/rengoku.jpeg"  loading="lazy" alt="Tatuagem do personagem Rengoku do anime Kimetsu no Yaiba - Demon Slayer"  class="swiper-slide">    
            <img src="public/img/works/dragon.jpeg"  loading="lazy" alt=""  class="swiper-slide"> 
            <img src="public/img/works/gon.jpg" alt="Tatuagem do personagem Gon em sua forma do arco das formigas Quimeras, do anime HunterXHunter" loading="lazy" class="swiper-slide">   
            <img src="public/img/works/noiva_cadaver.png"  loading="lazy" alt="Tataugem da personagem Noiva Cadáver do filme animado A noiva Cadáver"  class="swiper-slide">    
            <img src="public/img/works/sephirot.jpeg"  loading="lazy" alt="Tatuagem do personagem Sephirot de Final Fantasy VII"  class="swiper-slide"> 
            <img src="public/img/works/bloodborne.jpg"  loading="lazy" alt="Tatuagem de Lady Maria, personagem e boss da DLC The Old Hunters, do jogo soulslike BloodBorne"  class="swiper-slide"> 
            <img src="public/img/works/naruto.jpg"  loading="lazy" alt="Tatuagem da marca da maldição, referência ao arco clássico do anime Naruto"  class="swiper-slide">
            <img src="public/img/works/plants.jpeg"  loading="lazy" alt=""  class="swiper-slide">
            <img src="public/img/works/spiral_dragon.jpeg"  loading="lazy" alt=""  class="swiper-slide">
            <img src="public/img/works/loyalty.jpeg"  loading="lazy" alt=""  class="swiper-slide">
            <img src="public/img/works/flowers.jpeg"  loading="lazy" alt=""  class="swiper-slide">

        </div>
        
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        </div>
         <!-- <div class="box_button"><button class="btn_two"><a href="portfolio">Visualizar Portfólio</a></button></div> -->

</section>

<section class="blog animate-boxOne">
    <div class="custom_separator"></div>
    <h2>Posts Recentes - Blog</h2>
    <span class="separator_orange"></span>

    <article class="card_post">
    <?php foreach($data['posts'] as $posts) { 
         $urlCleaning = preg_replace('/[^A-Za-z0-9-]/', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $posts['title']));

         $titleUrl = strtolower(str_replace(' ', '-', $urlCleaning));
        
        ?>
        <div>
            <a href="blog/post?id=<?=$posts['id']?>&title=<?=$titleUrl?>">
                <img src="public/img/blog/<?=$posts['cover_photo']?>"  loading="lazy" alt="">
                <div class="content">
                    <p class="date"><?=Utilities::formatDateTime($posts['date'])?></p>
                    <h3><?=$posts['title']?></h3>
                    <p class="text"><?=$posts['summary']?></p>
                </div>
            </a>
            
        </div> 
    <?php } ?>

        <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    </article>
    <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    
</section>


<?php include_once './inc/footer.php';?>


    
<script async src="public/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

    const windowWidth = window.innerWidth;

    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // slidesPerView: 3,
    // spaceBetween: 30,
    //    pagination: {
    //      el: ".swiper-pagination",
    //      clickable: true,
    //    },


     // Verifica se a largura da janela é maior ou igual a 728 pixels
    slidesPerView: windowWidth >= 1400 ? 5 : windowWidth >= 1200 ? 4 : windowWidth >= 728 ? 3 : 1,
    spaceBetween: windowWidth >= 1200 ? 60 : windowWidth >= 728 ? 30 : 0,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

        // Autoplay settings
    autoplay: {
        delay: 3000, // Defina o intervalo de tempo em milissegundos (3 segundos neste caso)
    },

  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

</body>
</html>