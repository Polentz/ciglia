<?= snippet('header') ?>

<main class="main">
    <div class="column">
        <!-- <?php foreach($site->library()->toFiles() as $image) : ?>
            <img src="<?= $image->url() ?>" alt="<?= $image->altTag() ?>">
        <?php endforeach ?> -->
        <div></div>
    </div>
    <div class="column">
        <?= $page->blocks()->toBlocks() ?>
    </div>
</main>

<?= snippet('footer') ?>
