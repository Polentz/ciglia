<?php
Kirby::plugin('ciglia/blocks', [
    'blueprints' => [
        'blocks/maintext' => __DIR__ . '/blueprints/blocks/maintext.yml',
        'blocks/title' => __DIR__ . '/blueprints/blocks/title.yml',
        'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml',
        'blocks/accordionheader' => __DIR__ . '/blueprints/blocks/accordionheader.yml',
        'blocks/accordiontext' => __DIR__ . '/blueprints/blocks/accordiontext.yml',
      ],
      'snippets' => [
        'blocks/maintext' => __DIR__ . '/snippets/blocks/maintext.php',
        'blocks/title' => __DIR__ . '/snippets/blocks/title.php',
        'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
        'blocks/accordionheader' => __DIR__ . '/snippets/blocks/accordionheader.php',
        'blocks/accordiontext' => __DIR__ . '/snippets/blocks/accordiontext.php',
      ],
]);