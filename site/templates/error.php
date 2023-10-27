<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?></title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link href="https://fonts.cdnfonts.com/css/bricolage-grotesque" rel="stylesheet">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>
<body>
    <header class="header">
        <h1><?= $site->page()->title() ?></h1>
        <h2><a href="<?= $site->page('home')->url() ?>">Click here to go back Home</a></h2>
    </header>
</body>
</html>