<?php

$wgResourceModules['ext.OSEStyleModule.css'] = array(
		'scripts' => array(),
		'styles' => array('style.css'),
		'messages' => array(
		),
		'dependencies' => array(
		),
		'position' => 'bottom',
		'localBasePath' => __DIR__ . '/ressources',
		'remoteExtPath' => 'OSEStyleModule/ressources',
);


$wgMessagesDirs['OSEStyleModule'] = __DIR__ . "/i18n";

$wgAutoloadClasses['Skins\\Chameleon\\Components\\OSEFooter'] = __DIR__ . "/includes/Components/OSEFooter.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\OSEFooterLinks'] = __DIR__ . "/includes/Components/OSEFooterLinks.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\WikifabFooterLinks'] = __DIR__ . "/includes/Components/WikifabFooterLinks.php";

$egChameleonLayoutFile= __DIR__ . '/layout/layout-OSE.xml';

$wgFooterIcons['poweredby']['wikifab']['url'] = "http://en.wikifab.org/";
$egChameleonSearchPage = 'Search';

$wgLogo = $wgScriptPath . "/extensions/OSEStyleModule/ressources/images/wiki.png";

$wgFavicon =  $wgScriptPath . "/extensions/OSEStyleModule/ressources/images/favicon.ico";


$egChameleonExternalStyleModules[__DIR__ . '/ressources/style.css' ] = $wgScriptPath . '/skins/ose-skin';

$wgHooks['BeforePageDisplay'][] = "oseStyleModuleOnBeforePageDisplay";

function oseStyleModuleOnBeforePageDisplay( $out ) {
	$out->addModules( 'ext.OSEStyleModule.css' );
}

$wfexploreCategories = array (
        'Type' => array (
                'Design' => 'Design',
                'Planning' => 'Planning',
				'Prototype' => 'Prototype',
				'Almost done' => 'Almost done',
				'Full release' => 'Full release',
        ),
        'area' => array (
                'Habitat' => 'Habitat',
                'Agriculture' => 'Agriculture',
                'Industry' => 'Industry',
                'Energy' => 'Energy',
                'Materials' => 'Materials',
                'Transportation' => 'Transportation',
        ),
        'Difficulty' => array (
                'Very easy' => 'Very easy',
                'Easy' => 'Easy',
                'Medium' => 'Medium',
                'Hard' => 'Hard',
                'Very hard' => 'Very hard'
        )
);