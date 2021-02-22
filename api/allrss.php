<?php
/**
 * Retourne un fichier XML .opml
 *
 * @var array $datas_config         importé depuis 'datas_datas_config.php';
 * @var array $datas_annuaire importé depuis 'datas_annuaire.php';
 */

require_once 'datas_config.php';
require_once 'datas_links.php';

header('Content-type: application/x-xml');
header('Content-Disposition: attachment; filename="'. $datas_config['ALL_RSS_FILENAME'] . '"');

echo '<?xml version="1.0"?>';
?>
<opml version="1.0">
    <head>
        <title><?= $datas_config['API_NAME'] ?> Rss List</title>
    </head>
    <body>
    <outline title="<?= $datas_config['API_NAME'] ?> Rss List" text="<?= $datas_config['API_NAME'] ?> Rss List"
             description="<?= $datas_config['API_NAME'] ?> Rss List" type="folder">
        <?php
        foreach ($datas_annuaire as $cat) {
            $xml = '';
            $isEmptyCat = true;

            $xml .= '        <outline title="' . $cat['cat_name'] . '" text="' . $cat['cat_name'] . '" description="' . $cat['cat_name'] . '" type="folder">' . "\n";
            foreach ($cat['datas_links'] as $link) {
                if (!empty($link['rss'])) {
                    $isEmptyCat = false;
                    $xml .= '            <outline title="' . $link['name'] . '" text="' . $link['name'] . '" description="' . $link['desc'] . '" type="' . $link['rss_type'] . '" xmlUrl="' . $link['rss'] . '" htmlUrl="' . url . '"/>' . "\n";
                }
            }
            $xml .= '        </outline>' . "\n";
            if (!$isEmptyCat) {
                echo $xml;
            }
        }
        ?>
    </outline>
    </body>
</opml>


