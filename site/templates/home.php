<?php
    if ($kirby->language()->code() == 'it') {
        $contactString = 'Contatti';
    } else if ($kirby->language()->code() == 'en') {
        $contactString = 'Contact';
    } 
?>

<?= snippet('header', ['page' => $page]) ?>

<main class="main">
    <div class="column">
        <?php if ($image = $page->cover()->toFile()) : ?>
            <img src="<?= $image->crop(600, 600, 144)->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
    </div>
    <div class="column">
        <div class="column-block">
            <?= $page->blocks()->toBlocks() ?>
        </div>
        <?php if ($page->partners()->isNotEmpty()) : ?>
            <div id="partners" class="column-block">
                <?php foreach($page->partners()->toFiles() as $logo) : ?>
                    <figure class="logo-wrapper">
                        <img src="<?= $logo->url() ?>" alt="<?= $logo->alt() ?>">
                        <?php if ($logo->caption()->isNotEmpty()) : ?>
                            <figcaption><?= $logo->caption()->kt() ?></figcaption>
                        <?php endif ?>
                    </figure>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <?php if ($page->credits()->isNotEmpty()) : ?>
            <div class="column-block">
                <?= $page->credits()->kt() ?>
            </div>
        <?php endif ?>
        <?php if ($site->contact()->isNotEmpty()) : ?>
            <div id="contact" class="column-block">
                <h3 class="column-title"><?= $contactString ?></h3>
                <a href="mailto:<?= $site->contact() ?>"><?= $site->contact() ?></a>
            </div>
        <?php endif ?>
    </div>
</main>

<?= snippet('footer') ?>