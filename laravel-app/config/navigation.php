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
            'route' => 'heating',
            'dropdown' => [
                ['label' => 'Heat Pumps', 'route' => 'heat-pumps'],
                ['label' => 'Furnaces', 'route' => 'furnaces'],
                ['label' => 'Boilers', 'route' => 'heating'],
                ['label' => 'Ductless', 'route' => 'ductless'],
            ],
        ],
        [
            'label' => 'Cooling',
            'route' => 'cooling',
            'dropdown' => [
                ['label' => 'Air Conditioners', 'route' => 'cooling'],
                ['label' => 'Heat Pumps', 'route' => 'heat-pumps'],
                ['label' => 'Ductless Systems', 'route' => 'ductless'],
            ],
        ],
        [
            'label' => 'Products',
            'route' => null,
            'dropdown' => [
                ['label' => 'Air Quality', 'route' => 'air-quality'],
                ['label' => 'Smart Thermostats', 'route' => 'thermostats'],
                ['label' => 'Packaged Systems', 'route' => 'packaged-systems'],
            ],
        ],
        [
            'label' => 'Why Nordic',
            'route' => 'why-nordic',
        ],
        [
            'label' => 'Support',
            'route' => 'support',
        ],
    ],

    'footer_menu' => [
        'heating' => [
            ['label' => 'Heat Pumps', 'route' => 'heat-pumps'],
            ['label' => 'Furnaces', 'route' => 'furnaces'],
            ['label' => 'Boilers', 'route' => 'heating'],
            ['label' => 'Installation', 'route' => 'heating'],
            ['label' => 'Repair', 'route' => 'heating'],
        ],
        'cooling' => [
            ['label' => 'Air Conditioners', 'route' => 'cooling'],
            ['label' => 'Ductless Systems', 'route' => 'ductless'],
            ['label' => 'Central AC', 'route' => 'cooling'],
            ['label' => 'Installation', 'route' => 'cooling'],
            ['label' => 'Repair', 'route' => 'cooling'],
        ],
        'products' => [
            ['label' => 'Air Purifiers', 'route' => 'air-quality'],
            ['label' => 'Smart Thermostats', 'route' => 'thermostats'],
            ['label' => 'Packaged Systems', 'route' => 'packaged-systems'],
            ['label' => 'Humidifiers', 'route' => 'air-quality'],
            ['label' => 'Ventilation', 'route' => 'air-quality'],
        ],
        'company' => [
            ['label' => 'About Us', 'route' => 'why-nordic'],
            ['label' => 'Why Choose Us', 'route' => 'why-nordic'],
            ['label' => 'Our Guarantee', 'route' => 'support'],
            ['label' => 'Financing', 'route' => 'support'],
            ['label' => 'Careers', 'route' => 'support'],
        ],
    ],
];
