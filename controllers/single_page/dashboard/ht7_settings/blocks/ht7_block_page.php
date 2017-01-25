<?php
namespace Concrete\Package\Ht7StartingPoint\Controller\SinglePage\Dashboard\Ht7Settings\Blocks;

use \Concrete\Core\Page\Controller\DashboardPageController,
    Core,
    Package;

defined('C5_EXECUTE') or die('Access Denied.');

class Ht7BlockPage extends DashboardPageController
{
    public function getCollectionDescription()
    {
        return t("Ht7 Starting Point Settings Page");
    }
    
    public function save()
    {
        
        $this->redirect('/dashboard/ht7_settings/blocks/ht7_starting_point/updated');
    }
    
    public function updated()
    {
        $this->set('message', t('Settings updated'));
        $this->view();
    }
    
    public function settingsform()
    {
        
        
        $this->save();
    }
    
    public function view()
    {
        /* @var $fh \Concrete\Core\Form\Service\Form */
        $this->set('fh', Core::make('helper/form'));
        /* @var $ih \Concrete\Core\Application\Service\UserInterface */
        $this->set('ih', Core::make('helper/concrete/ui'));
        $this->set('pkg', Package::getByHandle('ht7_starting_point'));
        $this->set('tabs', $this->getTabs());
    }
    
    protected function getTabs()
    {
        return [
            ['basics', t('Basics'), true],
            ['other', t('Other')]
        ];
    }
}
