<?php

return [
    'debug'  => true,
    'languages' => true,
    'smartypants' => true,
    'panel' => [
        'css' => 'assets/css/panel.css'
    ],
    'blocks' => [
        'fieldsets' => [
          'custom' => [
            'label' => 'Selezione un blocco:',
            'type' => 'group',
            'fieldsets' => [
              'maintext',
              'title',
              'accordion',
              'audiobutton',
              ]
            ],
        ]
            ],
];