<?php
/**
 * Mode d'emploi de l'API
 *
 * @var array $datas_config   importé depuis 'datas_config.php';
 */

require_once 'datas_config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>API</title>
</head>
<body>
<h1>BDD-APP @Inside</h1>
<p>
    Cette application est bâtie selon la BRUTAL DEV DESIGN  Philosophie.
</p>

<h1><a href="/api/annuaire">GET /api/annuaire</a></h1>
<p>
    Renvoi l'annuaire pour être 'inclus' en tant que block HTML (Curl etc ...)
</p>
<ul>
    <li><a href="/api/annuaire<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>/?asPage=1">GET /api/annuaire?asPage=1</a> : Permet de télécharger en page HTML valide
        autonome.
    </li>
    <li><a href="/api/annuaire<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>/?withStyle=1">GET /api/annuaire?withStyle=1</a> : Permet de télécharger en block HTML avec
        le style CSS.
    </li>
    <li><a href="/api/annuaire<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>/?withStyle=1&asPage=1">GET /api/annuaire?withStyle=1&asPage=1</a> : Permet de télécharger en page HTML valide avec
        le style CSS.
    </li>
    <li><a href="/api/annuaire<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>/?asJson=1">GET /api/annuaire?asJson=1</a> : Permet de télécharger au format JSON.
    </li>
</ul>
<br>
<h1><a href="/api/shaarlis<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/links</a></h1>
<p>
    Télécharger tous les sites et liens de l'annuaire au format JSON
</p>
<ul>
    <li><a href="/api/links<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/links</a> : Permet de télécharger la liste des flux Shaarli au format .opml
    </li>
</ul>
<br>
<h1><a href="/api/allrss<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/allrss</a></h1>
<p>
    Télécharger tous les flux RSS de l'annuaire au format .opml pour les importer dans votre lecteur RSS/ATOM
</p>
<ul>
    <li><a href="/api/allrss<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/allrss</a> : Permet de télécharger la liste des flux Rss au format .opml
    </li>
</ul>
<br>
<h1><a href="/api/shaarlis<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/shaarlis</a></h1>
<p>
   Télécharger les shaarlis de l'annuaire au format .opml pour les importer dans votre lecteur RSS/ATOM
</p>
<ul>
    <li><a href="/api/shaarlis<?= (file_exists('locks/dev.txt')) ? '.php' :'' ?>">GET /api/shaarlis</a> : Permet de télécharger la liste des flux Shaarli au format .opml
    </li>
</ul>

<h1>Du Code PHP Basique et Brutal - Source ici </h1>
<p style='color: grey'>
    Contributions, demandes d'ajouts de l'annuaire bienvenue via pull request : <br>
    <a href="https://github.com/PetitCitron/osd-api">https://github.com/PetitCitron/osd-api</a>
</p>

<h1>News</h1>
<p style="color: grey">
<?= $datas_config['NEWS'] ?>
</p>

<a href="<?= $datas_config['RETURN_SITE_LINK'] ?>"><- Retour</a>
</body>
</html>