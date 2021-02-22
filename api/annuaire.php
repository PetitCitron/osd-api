<?php
/**
 * Retourne une page HTML contenant l'annuaire
 *
 * @var array $config         importé depuis 'datas_config.php';
 * @var array $datas_annuaire importé depuis 'datas_annuaire.php';
 */

require_once 'datas_config.php';
require_once 'datas_links.php';


$writePage = false;
$writeStyle = false;

# URL PARAM CHECKS
if (!empty($_GET['asJson']) && $_GET['asJson'] == 1) {
    header('Content-Type: application/json');
    echo json_encode($datas_annuaire);
    return;
}

if (!empty($_GET['asPage']) && $_GET['asPage'] == 1) {
    $writePage = true;
}
if (!empty($_GET['withStyle']) && $_GET['withStyle'] == 1) {
    $writeStyle = true;
}
?>

<?php if ($writePage):
    # Si on est en mode Page complète
    echo '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Annuaire de site OldSchool</title>
        </head>
        <body>
    ';
    ?>
<?php endif; ?>

<?php if ($writeStyle):
      # Si on veut le style
?>
    <style>
        .annuaire_cat_head {
            background-color: #e6e6e6;
            padding: 1px;
            margin: 0 auto;
            text-align: center;
            border: solid #6e92ca;
        }

        .annuaire_cat_content {
            background-color: #c6c1c136;;
        }

        .annuaire_table caption {
            background-color: #e6e6e6;
            padding-left: 15px;
            text-align: left;
            border: solid #6e92ca;
        }

        .annuaire_table {
            width: 100%;
        }

        .annuaire_title {
            text-align: center;
        }
    </style>
<?php endif; ?>

    <div id="annuaire">
        <div class="annuaire_title">
            <h1>L'Annuaire Old School</h1>
        </div>
        <?php foreach ($datas_annuaire as $cat): ?>
            <div class="annuaire_cat_content" id="<?= $cat['cat_id'] ?>">
                <table class="annuaire_table">
                    <caption><?= $cat['cat_name'] ?></caption>
                    <thead>
                    <tr>
                        <th>Lien</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cat['datas_links'] as $link): ?>
                        <tr>
                            <td><a href="<?= $link['url'] ?>" rel="nofollow"><?= $link['name'] ?></a></td>
                            <td><?= $link['desc'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
        <?php endforeach; ?>
    </div>

<?php if ($writePage):
    # Si on est en mode Page complète
    echo '
        </body>
    </html>
    ';
    ?>
<?php endif; ?>