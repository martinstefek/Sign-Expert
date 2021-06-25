<?php function service($title, $arrayOfLinks, $image) { ?>
<div class="services-list-col">
    <div class="card service">
        <div class="card-hero">
            <img src="<?php echo $image; ?>" alt="Service image">
        </div>

        <div class="service-content">
            <div class="service-title"><?php echo $title; ?></div>

            <ul class="link-list">
                <?php foreach($arrayOfLinks as $link): ?>
                <li><a href="#"><?php echo $link ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="service-footer">
            <a href="#" class="btn btn-bordered btn-full">Čo môžem vytvoriť?</a>
            <a href="#" class="btn btn-primary btn-full">
                Objaviť produkty

                <svg class="icon icon-arrow-right stroke-white">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>
            </a>
        </div>
    </div>
</div>
<?php } ?>