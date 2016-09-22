<?php

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Wiki Low-tech Lab";
$wgMetaNamespace = "Wiki_Low-tech_Lab";


## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/skins/lowtechlab-skin/images/wiki.png";

$wgFavicon = "/skins/lowtechlab-skin/images/favicon.ico";


$egChameleonExternalStyleModules = array(
    __DIR__ . '/skins/lowtechlab-skin/css/style.css' => $wgScriptPath . '/skins/lowtechlab-skin',
);

require_once "$IP/extensions/LowtechlabSkin/LowtechlabSkin.php";

$egWfExploreLayoutForm= __DIR__ . '/skins/lowtechlab-skin/LowTechLabLayoutExploreForm.php';

$wfexploreCategories = array (
        'Type' => array (
                'Recherches théoriques' => 'Recherches théoriques',
                'Prototype' => 'Prototype',
				'En test' => 'En test',
				'Low-tech validée' => 'Low-tech validée'
        ),
        'area' => array (
                'Énergie' => 'Énergie',
                'Alimentation' => 'Alimentation',
                'Hygiène' => 'Hygiène',
                'Soleil' => 'Soleil',
                'Marin' => 'Marin',
                'Biomasse' => 'Biomasse',
                'Eau' => 'Eau',
                'Outils' => 'Outils',
                'Vent' => 'Vent',
                'Hydrolique' => 'Hydrolique',
                'Humain' => 'Humain',
        ),
        'Difficulty' => array (
                'Très facile' => 'Très facile',
                'Facile' => 'Facile',
                'Moyen' => 'Moyen',
                'Difficile' => 'Difficile',
                'Très difficile' => 'Très difficile'
        )
);