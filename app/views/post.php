<?php

use App\utilities\Utilities;

 include_once './inc/header.php';?>


        <div class="first_call word limitatorTitle banner_post">
            <h1 class=" animate-lettersTitle word titlePost "><?=$onePost['title']?></h1>
            <article class="postAuthor">
                    <div>
                        <img src="<?php echo URL; ?>public/img/social/leotatuador.jpeg" alt width="50">
                        <a href="">Leonardo Barbosa</a>
                    </div>
                    <div>
                        <ul class="midias">
                            <li><i class="fa-brands fa-instagram fa-spin fa-lg" style="color: #f0b648;"></i></li>
                            <li><i class="fa-brands fa-whatsapp fa-spin fa-lg" style="color: #f0b648;"></i></li>
                        </ul>
                    </div>
            </article>

        </div>
    </div>
</section>

<main class="main_post">
<section class="page_post_section">
        <div class="box_one animate-boxOne about" >
            <span>
                <p class="word summary_post"><?=$onePost['summary']?></p>
                <span>
                    <p class="word summary_post"><?=Utilities::formatDateTime($onePost['date'])?></p>
                    <p class="sharethis-inline-share-buttons"></p>
                </span>
            </span>
        </div>
        <span class="separator_orange animate-boxOne "></span>
        <article class="article-post animate-boxOne post_content" style="margin-top: 30px;">
            <div>
                <div class="limitatorPost dynamic_content">
                    <?=$onePost['content']?>
                </div>
        </article>
</section>
<hr>
<section style="margin-top:30px; margin-bottom: 30px;">
    <div class="dynamic_content">
        <h3 class="" style="font-weight: bold; margin-left: 20px;">Últimos Posts</h3>
        <ul style="line-height: 24px; padding-right: 50px;">
            <?php foreach($data['recentsPosts'] as $posts) { 
                 $urlCleaning = preg_replace('/[^A-Za-z0-9-]/', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $posts['title']));

                 $titleUrl = strtolower(str_replace(' ', '-', $urlCleaning));
                ?>
            <a href="post?id=<?=$posts['id']?>&title=<?=$titleUrl?>" style="">
                <li style="line-height: 3
                px; text-decoration: underline;"><?=$posts['title']?></li>
                <li style="line-height: 37px;"><?=Utilities::formatDateTime($posts['date'])?></li>
            </a>
            <hr>
            <?php } ?>
        </ul>
    </div>
</section>

</main>



<?php include_once './inc/footer.php';?>


    
<script src="<?php echo URL ?>public/js/script.js"></script>
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
    slidesPerView: windowWidth >= 1200 ? 4 : windowWidth >= 728 ? 3 : 1,
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