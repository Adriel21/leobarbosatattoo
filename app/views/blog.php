<?php

use App\utilities\Utilities;

 include_once './inc/header.php';?>


        <div class="first_call word limitator">
            <h1 class="word animate-lettersTitle word limitator">Aprenda sobre o mundo de <span style="color: #F0B648; font-style: italic; font-weight: 800;" class="">TATUAGENS</span> com o nosso Blog.</h1>

            <!-- <p class="animate-lettersText ">Assuntos diversos:</p> -->
            <ul class="subject" >
                <?php foreach($data['categories'] as $categories) { ?>
                <li><a href="blog?categoria=<?=$categories['name']?>&pg=1" class="commonLink"><?=$categories['name']?></a></li>
               <?php } ?>

            </ul>

            <div class="searchBlog">
                <form action="blog" method="POST" class="">
                    <div>
                        <input type="text" name="pesquisa" placeholder="Pesquisar">
                        <button type="submit"><span class="material-symbols-outlined">search</span></button>
                    </div>
                </form>
            </div>

            <!-- <button class="btn_one animate-lettersButton"><a href="portfolio commonLink">Visualizar Portfólio</a></button> -->
        </div>
    </div>
</section>

<main>
<section class="blog">
    <h2><?=$initialSection?></h2>
    <span class="separator_orange"></span>
    
    <article class="card_post">
    <?php foreach ($data['posts'] as $post) { 
            $urlCleaning = preg_replace('/[^A-Za-z0-9-]/', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $post['title']));

            $titleUrl = strtolower(str_replace(' ', '-', $urlCleaning));

        ?>
        <div>
            <img src="public/img/blog/<?=$post['cover_photo']?>"  loading="lazy" alt="">
            <div class="content">
                <a href="blog/post?id=<?=$post['id']?>&title=<?=$titleUrl?>">
                    <p class="date"><?=Utilities::formatDateTime($post['date'])?></p>
                    <h3><?=$post['title']?></h3>
                    <p class="text"><?=$post['summary']?>
                    </p>
                </a>
            </div>
            
        </div> 
    <?php } ?>
     
        <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    </article>
    <!-- <div class="box_button"><button class="btn_three">Ir ao Blog</button></div> -->
    
</section>


</main>

<?php if(count($nav)>6) { ?> 
<nav aria-label="Page navigation example" class="nav_pagination">
            
            <ul class="pt-2 pagination justify-content-end align-items-end paginacao">
                                    <?php if($pg == '' || $pg == 1) { ?>
                                    <li class="page-item disabled"><a class="page-link" href="blog">Anterior</a></li>
                                    <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="blog?pg=<?=$pg - 1 ?>">Anterior</a></li>     
                                     <?php  }?>
                                    <!-- Indices limitando na apresentação de 4 indices anteriores ao ativo -->
                
                                    <li class="page-item"><a class="page-link" href="blog?pg=<?=$buttonPgTwo?>"><?=$buttonPgTwo?></a></li>
                                    <?php if($countNavBetween != 2) {  ?>
                                    <li class="page-item"><a id="page-item-two" class="page-link" href="blog?pg=<?=$countNavBetween?>"><?=$countNavBetween?></a></li>
                                    <?php } ?>
                                    <?php if($countNav !== 2) { ?>
                                    <li class="page-item"><a id="page-item-three"   class="page-link" href="<?=$dynamicLink?>pg=<?=$countNav?>"><?=$countNav?></a></li>
                                    <?php } ?>
                                    <?php if($pg*6 >= count($nav)) { ?>
                                    <li class="page-item disabled">
                                        <a class="page-link " href="blog?pg=<?=$pg?>">Próxima</a>
                                    </li>
                                    <?php } else { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?=$dynamicLink?>pg=<?=$pg = $pg +1?>">Próxima</a>
                                    </li>
                                    <?php } ?>

            </ul>
</nav>
<?php } ?>


<?php include_once './inc/footer.php';?>


    
<script async src="public/js/script.js"></script>


</body>
</html>