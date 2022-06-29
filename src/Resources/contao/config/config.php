<?php

$GLOBALS['ASSETS_MANAGER'] = [];
$GLOBALS['ASSETS_MANAGER']['BACKEND_PLACEHOLDER'] = '##ALNVCONTAOASSETSMANAGER##';

if (class_exists('Alnv\ContaoAssetsManagerBundle\Library\AssetsManager')) {
    $objThemeManager = \Alnv\ContaoAssetsManagerBundle\Library\AssetsManager::getInstance();
    $objThemeManager->addIfNotExist('bundles/alnvcontaoassetsmanager/js/libraries/vue/vue.min.js');
    $objThemeManager->addIfNotExist('bundles/alnvcontaoassetsmanager/js/libraries/vue/vue-resource.min.js');
    $objThemeManager->addIfNotExist('bundles/alnvcontaoassetsmanager/js/vue/components/alert-component.js');
    $objThemeManager->addIfNotExist('bundles/alnvcontaoassetsmanager/js/vue/components/loading-component.js');
}

if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS']['alnvcontaoassetsmanager'] = 'bundles/alnvcontaoassetsmanager/css/contao.css';
    $GLOBALS['TL_MOOTOOLS']['alnvcontaoassetsmanager'] = $GLOBALS['ASSETS_MANAGER']['BACKEND_PLACEHOLDER'];
    $GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = ['Alnv\ContaoAssetsManagerBundle\Hooks\BackendTemplate', 'parse'];
    if (class_exists('Alnv\ContaoAssetsManagerBundle\Library\AssetsManager')) {
        $objThemeManager = \Alnv\ContaoAssetsManagerBundle\Library\AssetsManager::getInstance();
        $objThemeManager->addIfNotExist('bundles/alnvcontaoassetsmanager/js/libraries/core.js');
    }
}