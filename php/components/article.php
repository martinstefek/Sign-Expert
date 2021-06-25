<?php function article() { ?>
<a href="<?php href('blog-item.php'); ?>" class="card article">
    <div>
        <div class="card-hero">
            <img src="img/blog.jpg" alt="Article image">
        </div>

        <div class="article-date">22. Marec 2020</div>

        <h2 class="article-title">Čo sú to odznaky či buttony?</h2>

        <div class="article-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>

    <div class="article-footer">
        <span class="btn btn-full btn-article">
            PREČÍTAŤ ČLÁNOK

            <svg class="icon icon-arrow-right">
                <use xlink:href="#sprite-chevron-right"></use>
            </svg>
        </span>
    </div>
</a>
<?php } ?>