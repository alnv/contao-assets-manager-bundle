<?php

namespace Alnv\ContaoAssetsManagerBundle\Library;

use Contao\Combiner;

class AssetsManager extends Combiner
{

    protected static $arrManager = [];
    
    protected static $objInstance = null;

    public static function getInstance()
    {

        if (null === self::$objInstance) {
            self::$objInstance = new self;
        }

        return self::$objInstance;
    }

    public function addIfNotExist($strFile)
    {

        $arrFiles = explode('/', $strFile);
        $strFilename = end($arrFiles);

        if (!array_key_exists($strFilename, self::$arrManager)) {
            self::$arrManager[$strFilename] = $strFile;
        }
    }

    public function removeFile($strFile)
    {

        $arrFiles = explode('/', $strFile);
        $strFilename = end($arrFiles);
        if (array_key_exists($strFilename, self::$arrManager)) {
            unset(self::$arrManager[$strFilename]);
        }
    }

    public function getCombinedAssets($strUrl = null, $strVersion = null, $strMedia = 'screen')
    {

        $this->addMultiple(self::$arrManager, $strVersion, $strMedia);

        return $this->getCombinedFileUrl($strUrl);
    }
}