<?php function homeTechButton($title, $id, $mobile, $open = false) { ?>
    <button  class="btn btn-white btn-full home-tech-button <?php echo $mobile ? 'home-tech-button-mobile' : ''; ?>"
             type="button"
             aria-label="Open <?php $title ?>"
             data-toggle="accordion"
             data-parent="#techs-accordion"
             data-target="#<?php echo $id; ?>"
    >
        <?php echo $title; ?>

        <?php if ($mobile): ?>
        <svg class="icon icon-arrow-right">
            <use xlink:href="#sprite-cancel"></use>
        </svg>
        <?php else: ?>
        <svg class="icon icon-arrow-right stroke-primary">
            <use xlink:href="#sprite-chevron-right"></use>
        </svg>
        <?php endif; ?>
    </button >
<?php } ?>