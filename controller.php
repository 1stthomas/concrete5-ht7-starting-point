<?php
namespace Concrete\Package\Ht7StartingPoint;

use \Concrete\Core\Backup\ContentImporter,
    \Concrete\Core\Package\Package;
use AssetList;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{
    protected $pkgHandle = 'ht7_starting_point';
    protected $appVersionRequired = '5.7.5.8';
    protected $pkgVersion = '0.0.1';
    
    public function getPackageDescription()
    {
        return t('Installs the ht7 starting point package with several basic stractures.');
    }
    
    public function getPackageName()
    {
        return t('Ht7 Starting Point');
    }
    
    public function install()
    {
        $pkg = parent::install();
        // Process install.xml file
        $pkg = Package::getByHandle($this->pkgHandle);
        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/install.xml');
    }
    
    protected function registerAssets($pkg)
    {
//        $al  = AssetList::getInstance();
//        
//        $al->register('javascript', 'ht7-swiper-main', 'js/mesch.image.button.text.js', array('position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true), $pkg);
//        
//        $al->registerGroup('image-button-text-main',
//                array(
//                    array('css', 'image-button-text-main'),
//                    array('javascript', 'image-button-text-main')
//                )
//        );
    }
}