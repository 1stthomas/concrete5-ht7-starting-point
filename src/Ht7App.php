<?php
namespace Concrete\Package\Ht7StartingPoint\Src;

use Package;

class Ht7App
{
    private static $pkg;

    /**
     * Get current package handle
     *
     * @return string
     */
    public static function pkgHandle()
    {
        return 'ht7_starting_point';
    }

    /**
     * Get current package object
     *
     * @return \Package
     */
    public static function pkg()
    {
        if (!is_object(self::$pkg)) {
            self::$pkg = Package::getByHandle(self::pkgHandle());
        }
        return self::$pkg;
    }

    /**
     * Gets a package specific entity manager.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function em()
    {
        return self::pkg()->getEntityManager();
    }

    /**
     * Get the standard database config liaison
     *
     * @return \Concrete\Core\Config\Repository\Liaison
     */
    public static function cfg()
    {
        return self::pkg()->getConfig();
    }
}