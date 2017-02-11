<?php
namespace Concrete\Package\Ht7StartingPoint\Src;
 
defined('C5_EXECUTE') or die("Access Denied.");
 
use \Concrete\Core\Foundation\Service\Provider;
 
class ServiceProvider extends Provider
{
    public function register()
    {
        $pkgHandle = 'ht7_starting_point';
        $singletons = array(
            'helper/settings' => '\Concrete\Package\Ht7StartingPoint\Src\Service\Settings',
        );
        foreach($singletons as $key => $value) {
            $this->app->singleton($pkgHandle . '/' . $key, $value);
        }
    }
}
