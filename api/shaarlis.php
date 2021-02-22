<?php
/**
 * Retourne un XML shaarli.opml des liens Shaarli de l'annuaire
 *
 * @var array $datas_config importé depuis 'datas_config.php';
 * @var array $datas_links importé depuis 'datas_links.php';
 */
require_once 'datas_config.php';
require_once 'datas_links.php';

header('Content-type: application/x-xml');
header('Content-Disposition: attachment; filename="shaarlis.opml"');
echo '<?xml version="1.0"?>';
?>
<opml version="1.0">
    <head>
        <title><?= $datas_config['API_NAME'] ?> Shaalis List</title>
    </head>
    <body>
    <outline title="<?= $datas_config['API_NAME'] ?> Shaarlis List" text="<?= $datas_config['API_NAME'] ?> Shaarlis List"
             description="<?= $datas_config['API_NAME'] ?> Shaarlis List" type="folder">
        <?php foreach ($datas_links as $link): ?>
            <?php if (in_array('shaarli', $link['cats'])): ?>
                <outline title="<?= $link['name'] ?>" text="<?= $link['name'] ?>" description="<?= $link['desc'] ?>"
                         type="<?= $link['rss_type'] ?>" xmlUrl="<?= $link['rss'] ?>" htmlUrl="<?= $link['url'] ?>"/>
            <?php endif; ?>
        <?php endforeach; ?>
    </outline>
    </body>
</opml>


