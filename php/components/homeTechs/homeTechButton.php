<?php function homeTechButton($title, $id, $mobile, $open = false) { ?>
    <button  class="btn btn-white btn-full home-tech-button <?php echo $mobile ? 'home-tech-button-mobile' : ''; ?>"
             type="button"
             data-toggle="accordion"
             data-parent="#techs-accordion"
             data-target="#<?php echo $id; ?>"
    >
        <?php echo $title; ?>

        <svg class="icon icon-arrow-right stroke-primary">
            <use xlink:href="#sprite-chevron-right"></use>
        </svg>
    </button >
<?php } ?>