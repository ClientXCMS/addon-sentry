<?php

/*
 * This file is part of the CLIENTXCMS project.
 * This file is the property of the CLIENTXCMS association. Any unauthorized use, reproduction, or download is prohibited.
 * For more information, please consult our support: clientxcms.com/client/support.
 * Year: 2024
 */
return [
    'title' => 'Sentry',
    'description' => 'Configurez le service de surveillance des erreurs Sentry.',
    'saved' => 'Les paramètres ont été enregistrés avec succès.',
    'fields' => [
        'dsn' => 'DSN',
        'sample_rate' => 'Taux d\'échantillonnage',
        'traces_sample_rate' => 'Taux d\'échantillonnage des traces',
        'profiles_sample_rate' => 'Taux d\'échantillonnage des profils',
        'environment' => 'Environnement',
    ],
];
