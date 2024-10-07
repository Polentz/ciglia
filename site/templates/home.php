<?php
    if ($kirby->language()->code() == 'it') {
        $contactString = 'Contatti';
    } else if ($kirby->language()->code() == 'en') {
        $contactString = 'Contact';
    } 
?>

<?= snippet('header') ?>

<main class="main">
    <div class="column">
        <?php if ($image = $page->cover()->toFile()) : ?>
            <img src="<?= $image->crop(600, 600, 144)->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
    </div>
    <div id="info" class="column">
        <div class="column-block">
            <?= $page->blocks()->toBlocks() ?>
        </div>
        <?php if ($page->partners()->isNotEmpty()) : ?>
            <div id="partners" class="column-block">
                <?php foreach($page->partners()->toFiles() as $logo) : ?>
                    <?php if ($logo->link()->isNotEmpty()) : ?>
                        <a class="logo-wrapper" href="<?= $logo->link()->url() ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?= $logo->url() ?>" alt="partner's logo">
                        </a>
                    <?php else : ?>
                        <figure class="logo-wrapper">
                            <img src="<?= $logo->url() ?>" alt="partner's logo">
                        </figure>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <?php if ($page->credits()->isNotEmpty()) : ?>
            <div id="credits" class="column-block">
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
    <?= snippet('player') ?>
</main>

<?= snippet('footer') ?>