<?php
/**
 * Retourne un JSON des liens de l'annuaire
 *
 * @var array $datas_links importé depuis 'datas_links.php';
 */

require_once 'datas_links.php';

header('Content-Type: application/json');
echo json_encode($datas_links);
return;