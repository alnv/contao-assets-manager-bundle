<?php

$objAssetsManager = \Alnv\ContaoAssetsManagerBundle\Library\AssetsManager::getInstance();
$objAssetsManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue.min.js' );
$objAssetsManager->addIfNotExist( 'bundles/alnvcontaoassetsmanager/js/libraries/vue/vue-resource.min.js' );