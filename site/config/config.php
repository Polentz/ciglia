<?php

return [
    'debug'  => false,
    'languages' => true,
    'smartypants' => true,
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