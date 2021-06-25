<?php function pagination() { ?>
<nav>
    <ul class="pagination">
        <li>
            <a href="#" class="btn btn-bordered" aria-label="Predchádzajúca strana">
                <svg class="icon">
                    <use xlink:href="#sprite-pagination-chevron-left"></use>
                </svg>
            </a>
        </li>

        <li class="active">
            <a class="btn btn-bordered">
                1
            </a>
        </li>

        <li>
            <a href="#" class="btn btn-bordered">
                2
            </a>
        </li>

        <li>
            <a href="#" class="btn btn-bordered">
                3
            </a>
        </li>

        <li class="placeholder">
            ...
        </li>

        <li>
            <a href="#" class="btn btn-bordered">
                15
            </a>
        </li>

        <li>
            <a href="#" class="btn btn-bordered" aria-label="Nasledujúca strana">
                <svg class="icon">
                    <use xlink:href="#sprite-pagination-chevron-right"></use>
                </svg>
            </a>
        </li>
    </ul>
</nav>
<?php } ?>