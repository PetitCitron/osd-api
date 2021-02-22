<?php
/**
 * Injecte un Array data_links des liens de l'API
 *
 * @var array $datas_annuaire importé depuis 'datas_annuaire.php';
 */

include 'datas_annuaire.php';

$datas_links = [];
/** @var array $datas_annuaire from datas_annuaire */
foreach ($datas_annuaire as $cat)
{
    foreach ($cat['datas_links'] as $link) {
        $datas_links[] = $link;
    }
}