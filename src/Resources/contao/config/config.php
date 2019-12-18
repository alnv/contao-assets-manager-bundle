<?php

$objThemeManager = \Alnv\ContaoAssetsManagerBundle\Library\AssetsManager::getInstance();
if ( \System::getContainer()->get( 'request_stack' )->getCurrentRequest()->get('_scope') == 'backend' ) {
    $objThemeManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/core.js' );
}
$objThemeManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue.min.js' );
$objThemeManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue-resource.min.js' );

$GLOBALS['ASSETS_MANAGER'] = [];
$GLOBALS['ASSETS_MANAGER']['BACKEND_PLACEHOLDER'] = '##ALNVCONTAOASSETSMANAGER##';
$GLOBALS['TL_MOOTOOLS']['alnvcontaoassetsmanager'] = $GLOBALS['ASSETS_MANAGER']['BACKEND_PLACEHOLDER'];
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = [ 'Alnv\ContaoAssetsManagerBundle\Hooks\BackendTemplate', 'parse' ];