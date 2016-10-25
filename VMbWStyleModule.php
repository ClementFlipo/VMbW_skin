<?php

$wgResourceModules['ext.VMbWStyleModule.css'] = array(
		'scripts' => array(),
		'styles' => array('style.css'),
		'messages' => array(
		),
		'dependencies' => array(
		),
		'position' => 'bottom',
		'localBasePath' => __DIR__ . '/ressources',
		'remoteExtPath' => 'VMbWStyleModule/ressources',
);


$wgMessagesDirs['VMbWStyleModule'] = __DIR__ . "/i18n";

$wgAutoloadClasses['Skins\\Chameleon\\Components\\VMbWFooter'] = __DIR__ . "/includes/Components/VMbWFooter.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\VMbWFooterLinks'] = __DIR__ . "/includes/Components/VMbWFooterLinks.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\WikifabFooterLinks'] = __DIR__ . "/includes/Components/WikifabFooterLinks.php";

$egChameleonLayoutFile= __DIR__ . '/layout/layout-VMbW.xml';

$wgFooterIcons['poweredby']['wikifab']['url'] = "http://en.wikifab.org/";
$egChameleonSearchPage = 'Search';

$wgLogo = $wgScriptPath . "/extensions/VMbWStyleModule/ressources/images/wiki.png";

$wgFavicon =  $wgScriptPath . "/extensions/VMbWStyleModule/ressources/images/favicon.ico";


$egChameleonExternalStyleModules[__DIR__ . '/ressources/style.css' ] = $wgScriptPath . '/skins/ose-skin';

$wgHooks['BeforePageDisplay'][] = "oseStyleModuleOnBeforePageDisplay";

function oseStyleModuleOnBeforePageDisplay( $out ) {
	$out->addModules( 'ext.VMbWStyleModule.css' );
}

);