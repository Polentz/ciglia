<?= snippet('header') ?>

<main class="main">
    <div class="column">
        <?php if ($image = $page->cover()->toFile()) : ?>
            <img src="<?= $image->crop(600, 600, 144)->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
    </div>
    <div id="info" class="column">
        <?= $page->blocks()->toBlocks() ?>
    </div>
    <?= snippet('player') ?>
</main>

<?= snippet('footer') ?>