<?php

/*
 * This file is part of the CLIENTXCMS project.
 * This file is the property of the CLIENTXCMS association. Any unauthorized use, reproduction, or download is prohibited.
 * For more information, please consult our support: clientxcms.com/client/support.
 * Year: 2024
 */
return [
    'title' => 'Sentry',
    'description' => 'Configure the Sentry error monitoring service.',
    'saved' => 'Settings have been saved successfully.',
    'fields' => [
        'dsn' => 'DSN',
        'sample_rate' => 'Sample Rate',
        'traces_sample_rate' => 'Traces Sample Rate',
        'profiles_sample_rate' => 'Profiles Sample Rate',
        'environment' => 'Environment',
    ],
];
