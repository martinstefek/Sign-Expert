<?php function articleLarge() { ?>
    <a href="<?php href('blog-item.php'); ?>" class="card article article-large">
        <div class="card-hero" style="background-image: url('img/blog.jpg')"></div>

        <div class="article-content">
            <div class="article-date">22. Marec 2020</div>

            <h2 class="article-title">Čo sú to odznaky či buttony?</h2>

            <div class="article-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>

            <span class="btn btn-full btn-article">
                PREČÍTAŤ ČLÁNOK

                <svg class="icon icon-arrow-right">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>
            </span>
        </div>
    </a>
<?php } ?>