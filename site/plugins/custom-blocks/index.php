<?php
Kirby::plugin('ciglia/blocks', [
    'blueprints' => [
        'blocks/maintext' => __DIR__ . '/blueprints/blocks/maintext.yml',
        'blocks/title' => __DIR__ . '/blueprints/blocks/title.yml',
        'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml',
        'blocks/audiobutton' => __DIR__ . '/blueprints/blocks/audiobutton.yml',
      ],
      'snippets' => [
        'blocks/maintext' => __DIR__ . '/snippets/blocks/maintext.php',
        'blocks/title' => __DIR__ . '/snippets/blocks/title.php',
        'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
        'blocks/audiobutton' => __DIR__ . '/snippets/blocks/audiobutton.php',
      ],
]);