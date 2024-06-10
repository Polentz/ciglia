<?php

return [
    'debug'  => false,
    'languages' => true,
    'smartypants' => true,
    'panel' =>[
      'install' => true
    ],
    'blocks' => [
        'fieldsets' => [
          'custom' => [
            'label' => 'Seleziona un blocco:',
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