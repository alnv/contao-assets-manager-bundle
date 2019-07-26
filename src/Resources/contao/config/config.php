<?php

$objThemeManager = \Alnv\ContaoAssetsManagerBundle\Library\AssetsManager::getInstance();
$objThemeManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue.min.js' );
$objThemeManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue-resource.min.js' );