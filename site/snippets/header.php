<?php
    if ($kirby->language()->code() == 'it') {
        $lang = 'it';
        $langCode = 'it_IT';
        $href = 'en';
        $languageString = 'en';
        $contactString = 'Contatti';
    } else if ($kirby->language()->code() == 'en') {
        $lang = 'en';
        $langCode = 'en_US';
        $href = 'it';
        $languageString = 'it';
        $contactString = 'Contact';
    } 
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <meta name="description"
        content="<?= $site->description() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <meta name="keywords"
        content="<?= $site->keywords() ?>">
    <meta property="og:locale" content="<?= $langCode ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $site->title()?>">
    <meta property="og:description"
        content="<?= $site->description() ?>">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:site_name" content="<?= $site->title()?>">
    <?php if ($site->ogimage()->isNotEmpty()) : ?>
        <meta property="og:image" content="<?= $site->ogimage()->toFile()->url() ?>">
        <meta property="og:image:alt" content="<?= $site->ogimage()->toFile()->alt() ?>">
    <?php endif ?>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="<?= $site->description() ?>">
    <meta name="twitter:title"
        content="<?= $site->title()?>">
    <?php if ($site->ogimage()->isNotEmpty()) : ?>
        <meta name="twitter:image:alt" content="<?= $site->ogimage()->toFile()->alt() ?>">
    <?php endif ?>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <!-- <link rel="shortcut icon" type="image/png" sizes="48x48" href="/assets/favicons/flavia-favicon-48.png">
    <link rel="shortcut icon" type="image/png" sizes="64x64" href="/assets/favicons/flavia-favicon-64.png">
    <link rel="shortcut icon" type="image/png" sizes="192x192" href="/assets/favicons/flavia-favicon-192.png">
    <link rel="shortcut icon" type="image/png" sizes="512x512" href="/assets/favicons/flavia-favicon-512.png"> -->
    <link href="https://fonts.cdnfonts.com/css/bricolage-grotesque" rel="stylesheet">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>
<body>
    <header class="header">
        <h1><?= $site->title() ?></h1>
        <h2>via della lana<br>e della seta</h2>
    </header>

    <button id="menu-opener" class="menu-opener" type="button">
        <div class="menu-opener-wrapper">
            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4C8 6.20914 6.20914 8 4 8C1.79086 8 0 6.20914 0 4C0 1.79086 1.79086 0 4 0C6.20914 0 8 1.79086 8 4Z"/>
                <path d="M20 4C20 6.20914 18.2091 8 16 8C13.7909 8 12 6.20914 12 4C12 1.79086 13.7909 0 16 0C18.2091 0 20 1.79086 20 4Z"/>
                <path d="M8 16C8 18.2091 6.20914 20 4 20C1.79086 20 0 18.2091 0 16C0 13.7909 1.79086 12 4 12C6.20914 12 8 13.7909 8 16Z"/>
                <path d="M20 16C20 18.2091 18.2091 20 16 20C13.7909 20 12 18.2091 12 16C12 13.7909 13.7909 12 16 12C18.2091 12 20 13.7909 20 16Z"/>
            </svg>
        </div>
    </button>

    <menu id="menu" class="menu">
        <div class="menu-wrapper">
            <nav class="nav">
                <ul class="site-nav">
                    <li class="site-nav-item icon-wrapper">
                        <a href="<?= $site->page('home')->url() ?>">Home</a>
                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.66667 11.6667L12.3333 9M12.3333 9L9.66667 6.33333M12.3333 9L5.66667 9M9 1C13.4183 1 17 4.58172 17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1Z" />
                        </svg>
                    </li>
                    <?php if ($site->contact()->isNotEmpty()) : ?>
                        <li class="site-nav-item icon-wrapper">
                            <a href="<?= $site->page('home')->url() ?>#contact" class="js-scroll" data-target-section="contact"><?= $contactString ?></a>
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.66667 11.6667L12.3333 9M12.3333 9L9.66667 6.33333M12.3333 9L5.66667 9M9 1C13.4183 1 17 4.58172 17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1Z" />
                            </svg>
                        </li>
                    <?php endif ?>
                </ul>
                <div class="page-nav">
                    <?php foreach($pages->listed()->not('home') as $page) : ?>
                        <a href="<?= $page->url() ?>" class="page-nav-item">
                            <?php if($item = $page->cover()->toFile()) : ?>
                                <figure>
                                    <img src="<?= $item->url() ?>" alt="<?= $item->alt() ?>">
                                    <!-- <figcaption><?= $page->title() ?></figcaption> -->
                                </figure>
                            <?php endif ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </nav>
            <a href="<?= $site->page()->url($href) ?>" hreflang="<?php echo $href ?>" class="lang-switcher icon-wrapper">
                <p><?= $languageString ?></p>
                <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 9.00002C17 13.4182 13.4183 16.9999 9 16.9999M17 9.00002C17 4.5818 13.4183 1.00012 9 1.00012M17 9.00002H1M9 16.9999C4.58172 16.9999 1 13.4182 1 9.00002M9 16.9999C8.91039 16.9999 8.8215 16.9814 8.73945 16.9453C8.6574 16.9093 8.58372 16.8567 8.52307 16.7907C6.77724 14.9099 5.66641 12.1216 5.66641 8.99997C5.66641 5.87834 6.77724 3.09005 8.52307 1.20924C8.58372 1.14327 8.6574 1.09061 8.73945 1.05459C8.8215 1.01857 8.91039 1.00012 9 1.00012M9 16.9999C9.08961 16.9999 9.17798 16.9814 9.26003 16.9453C9.34208 16.9093 9.41576 16.8567 9.47641 16.7907C11.2222 14.9099 12.3331 12.1216 12.3331 8.99997C12.3331 5.87834 11.2222 3.09005 9.47641 1.20924C9.41576 1.14327 9.34208 1.09061 9.26003 1.05459C9.17798 1.01857 9.08961 1.00012 9 1.00012M1 9.00002C1 4.5818 4.58172 1.00012 9 1.00012"/>
                </svg>
            </a>
            <div class="page-label icon-wrapper">
                <p>Menu</p>
                <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="black"/>
                    <path d="M8.99984 6.16667C9.46007 6.16667 9.83317 5.79357 9.83317 5.33333C9.83317 4.8731 9.46007 4.5 8.99984 4.5C8.5396 4.5 8.1665 4.8731 8.1665 5.33333C8.1665 5.79357 8.5396 6.16667 8.99984 6.16667Z" fill="black"/>
                    <path d="M8.99984 9.83334C9.46007 9.83334 9.83317 9.46024 9.83317 9.00001C9.83317 8.53977 9.46007 8.16667 8.99984 8.16667C8.5396 8.16667 8.1665 8.53977 8.1665 9.00001C8.1665 9.46024 8.5396 9.83334 8.99984 9.83334Z" fill="black"/>
                    <path d="M8.99984 13.5C9.46007 13.5 9.83317 13.1269 9.83317 12.6667C9.83317 12.2064 9.46007 11.8333 8.99984 11.8333C8.5396 11.8333 8.1665 12.2064 8.1665 12.6667C8.1665 13.1269 8.5396 13.5 8.99984 13.5Z" fill="black"/>
                </svg>
            </div>
        </div>
    </menu>

    <a href="<?= $site->page()->url($href) ?>" hreflang="<?php echo $href ?>" class="lang-switcher icon-wrapper">
        <p><?= $languageString ?></p>
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 9.00002C17 13.4182 13.4183 16.9999 9 16.9999M17 9.00002C17 4.5818 13.4183 1.00012 9 1.00012M17 9.00002H1M9 16.9999C4.58172 16.9999 1 13.4182 1 9.00002M9 16.9999C8.91039 16.9999 8.8215 16.9814 8.73945 16.9453C8.6574 16.9093 8.58372 16.8567 8.52307 16.7907C6.77724 14.9099 5.66641 12.1216 5.66641 8.99997C5.66641 5.87834 6.77724 3.09005 8.52307 1.20924C8.58372 1.14327 8.6574 1.09061 8.73945 1.05459C8.8215 1.01857 8.91039 1.00012 9 1.00012M9 16.9999C9.08961 16.9999 9.17798 16.9814 9.26003 16.9453C9.34208 16.9093 9.41576 16.8567 9.47641 16.7907C11.2222 14.9099 12.3331 12.1216 12.3331 8.99997C12.3331 5.87834 11.2222 3.09005 9.47641 1.20924C9.41576 1.14327 9.34208 1.09061 9.26003 1.05459C9.17798 1.01857 9.08961 1.00012 9 1.00012M1 9.00002C1 4.5818 4.58172 1.00012 9 1.00012"/>
        </svg>
    </a>
    <div class="page-label icon-wrapper">
        <p><?= $site->page()->title() ?></p>
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.667 9.66671L9.00032 12.3334M9.00032 12.3334L6.33366 9.66671M9.00032 12.3334L9 5.66665M1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9Z" />
        </svg>
    </div>


