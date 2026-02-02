<?php

/**
 * Navigation Configuration
 * 
 * Centralized navigation menu data for header component.
 */

return [
    'main_menu' => [
        [
            'label' => 'Heating',
            'url' => '#',
            'dropdown' => [
                ['label' => 'Furnaces', 'url' => '#'],
                ['label' => 'Heat Pumps', 'url' => '#'],
                ['label' => 'Ductless Systems', 'url' => '#'],
            ],
        ],
        [
            'label' => 'Cooling',
            'url' => '#',
            'dropdown' => [
                ['label' => 'Air Conditioners', 'url' => '#'],
                ['label' => 'Heat Pumps', 'url' => '#'],
                ['label' => 'Ductless Systems', 'url' => '#'],
            ],
        ],
        ['label' => 'Air Quality', 'url' => '#'],
        ['label' => 'Thermostats', 'url' => '#'],
        ['label' => 'Products', 'url' => '#'],
    ],
];
