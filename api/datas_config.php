<?php
/**
 * Injecte l'Array $datas_config, configuration de l'API
 */

$datas_config = [
    'DEBUG' => false,
    'API_NAME' => 'oldschooldev.io',
    'ANNUAIRE_NAME' => 'L\'Annuaire Old School',
    'ALL_RSS_FILENAME' => 'oldschooldevio.opml',
    'RETURN_SITE_LINK' => '/api',
];

if($datas_config['DEBUG'] === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}