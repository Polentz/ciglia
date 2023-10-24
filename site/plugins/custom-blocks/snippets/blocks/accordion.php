<!-- <div class="accordion">
    <details>
        <summary class="column-title"><?= $block->header() ?></summary>
        <?= $block->body()->kt() ?>
    </details>
</div> -->

<div class="accordion">
    <h3 class="accordion-header column-title icon-wrapper"><?= $block->header() ?>
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.33333 9.66667L9 12.3333M9 12.3333L11.6667 9.66667M9 12.3333V5.66667M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z"/>
        </svg>
    </h3>
    <div class="accordion-content">
        <div class="accordion-content-wrapper">
            <?= $block->body()->kt() ?>
        </div>
    </div>
</div>