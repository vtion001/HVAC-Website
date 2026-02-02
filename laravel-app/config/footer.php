<?php

/**
 * Footer Configuration
 * 
 * Centralized footer link data for maintainability.
 */

return [
    'contact' => [
        'title' => 'Contact Us',
        'description' => 'Connect with our Customer Care team about your products, warranties, or any dealer questions.',
        'phone' => '1-833-298-3493',
        'hours' => 'Monday – Friday from 7am to 5pm CST',
    ],

    'columns' => [
        [
            'title' => 'Products',
            'links' => [
                ['label' => 'Air Conditioners', 'url' => '#'],
                ['label' => 'Furnaces', 'url' => '#'],
                ['label' => 'Heat Pumps', 'url' => '#'],
                ['label' => 'Packaged Systems', 'url' => '#'],
                ['label' => 'Ductless Systems', 'url' => '#'],
                ['label' => 'Thermostats', 'url' => '#'],
            ],
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['label' => 'Warranty & Registration', 'url' => '#'],
                ['label' => "Owner's Manuals", 'url' => '#'],
                ['label' => 'Troubleshooting', 'url' => '#'],
                ['label' => 'Maintenance Tips', 'url' => '#'],
                ['label' => 'Tax Credits & Rebates', 'url' => '#'],
            ],
        ],
        [
            'title' => 'For Partners',
            'links' => [
                ['label' => 'Become a Dealer', 'url' => '#'],
                ['label' => 'Distributor Locator', 'url' => '#'],
                ['label' => 'Commercial HVAC', 'url' => '#'],
                ['label' => 'Careers', 'url' => '#'],
            ],
        ],
    ],

    'legal' => [
        ['label' => 'Privacy Policy', 'url' => '#'],
        ['label' => 'Terms & Conditions', 'url' => '#'],
        ['label' => 'Accessibility', 'url' => '#'],
        ['label' => 'Sitemap', 'url' => '#'],
    ],
];
