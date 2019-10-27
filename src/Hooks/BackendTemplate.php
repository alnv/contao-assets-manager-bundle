<?php

namespace Alnv\ContaoAssetsManagerBundle\Hooks;


class BackendTemplate {


    public function parse( $strContent, $strTemplate ) {

        if ( $strTemplate == 'be_main' ) {

            $objAssets = new \FrontendTemplate('js_assetsmanager');
            $strContent = str_replace( $GLOBALS['ASSETS_MANAGER']['BACKEND_PLACEHOLDER'] , $objAssets->parse(), $strContent );
        }

        return $strContent;
    }
}