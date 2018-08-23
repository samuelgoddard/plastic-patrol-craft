<?php
return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 0,

        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'manage',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        'nav' => [
            [
              'title' => 'Community',
              'url' => '#community',
            ],[
              'title' => 'Surroundings',
              'url' => '#surroundings',
            ],[
              'title' => 'District',
              'url' => '#district',
            ],[
              'title' => 'Culture',
              'url' => '#culture',
            ],[
              'title' => 'Amenities',
              'url' => '#amenities',
            ],[
              'title' => 'Design',
              'url' => '#design',
            ],[
              'title' => 'Brook Partners',
              'url' => '#brook-partners',
            ]
        ],
    ],

    // Dev environment settings
    'development' => [
        // Base site URL
        'siteUrl' => null,

        // Dev Mode (see https://craftcms.com/support/dev-mode)
        'devMode' => true,
    ],

    // Staging environment settings
    'staging' => [
        // Base site URL
        'siteUrl' => null,
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];
