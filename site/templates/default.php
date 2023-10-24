<?= snippet('header') ?>

<main class="main">
    <div class="column">
        <?php if ($image = $page->cover()->toFile()) : ?>
            <img src="<?= $image->url() ?>" alt="<?= $image->altTag() ?>">
        <?php endif ?>
    </div>
    <div class="column">
        <?= $page->blocks()->toBlocks() ?>
    </div>
</main>

<?= snippet('footer') ?>