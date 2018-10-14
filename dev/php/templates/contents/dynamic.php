<section class="<?php echo $_GET['page'];?>">
    <header>
        <h2><?php echo $_GET['page'];?></h2>
    </header>

    <ul class="article-list">
        <?php
            while ($article = $articles->fetch_assoc()) {
                echo '
            <li>
                <article>
                    <picture>
                        <img alt="'.$article['title'].'" width="1024" src="/img/dynamic/'.$_GET['page'].'-'.$article['id'].'_1.jpg">
                    </picture>

                    <header class="title-wrapper">
                        <h3>'.$article['title'].'</h3>
                        <h5>'.$article['location'].'</h5>
                        <h6>'.$article['date'].'</h6>
                    </header>

                    <pre class="body">'.$article['body'].'</pre>
                </article>
            </li>
            <hr>
            ';
            }
        ?>
    </ul>
</section>
