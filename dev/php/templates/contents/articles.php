<section class="<?php echo $_GET['page'];?>">
    <header>
        <h2><?php echo ucfirst($_GET['page']);?></h2>
    </header>

    <ul class="article-list">
        <?php
            while ($article = $articles->fetch_assoc()) {
                $imagesArray = Array();

                for ($i=1; $i<=20; $i++) {
                    $imgPath = './img/articles/article-'.$article['id'].'_'.$i.'.jpg';

                    if (file_exists($imgPath)) {
                        $imagesArray[] = $imgPath;
                    }
                }

                $imagesListDataAttribute = 'data-images-list=\'["'.implode('","', $imagesArray).'"]\'';

                echo '
                <li>
                    <article class="article">
                        <picture>
                            <img class="carouselTrigger-img" alt="'.$article['title'].'" 
                                width="100%" height="auto"
                                data-carousel-trigger
                                '.$imagesListDataAttribute.'
                                src="./img/articles/article-'.$article['id'].'_1.jpg">
                        </picture>

                        <header>
                            <h3 class="title">'.$article['title'].'</h3>
                            <h5 class="location">'.$article['location'].'</h5>
                            <h6 class="date">'.$article['date'].'</h6>

                            <button type="button" class="carouselTrigger-btn" data-carousel-trigger '.$imagesListDataAttribute.'>
                                Guarda tutte le foto
                            </button>
                        </header>

                        <div class="body">'.$article['body'].'</div>
                    </article>
                </li>';
            }
        ?>
    </ul>
</section>
