<?php
namespace Site\Config;

class SiteConfig
{
    const WEB_ROOT    = "/opt/git/ReverbSkeleton";
    const SITE_ROOT   = "/opt/git/ReverbSkeleton/site";
    const REVERB_ROOT = "/opt/git/ReverbSkeleton/reverb";
    const VENDOR_ROOT = "/opt/git/ReverbSkeleton/vendor";

    const DEFAULT_HEAD_TITLE = "ReverbSkeleton";

    const DB_HOST = 'localhost';
    const DB_USER = 'db_user';
    const DB_PASS = 'wpe84u9384u5';
    const DB_DB   = 'lista';

    const DEFAULT_LOGIN = '/lista/html/login/index';
    const DEFAULT_PAGE_AFTER_LOGIN = '/lista/html/view';

    private $classes = array();
    private $initializers = array();

    public function __construct() 
    {
        $this->classes = array(
            // Libs
            'MemcachedManager'      => 'Reverb\Lib\MemcachedManager',
            'DbConnection'          => 'Reverb\Lib\DbConnection',
            // Components
            'Hello'                 => 'Site\Components\Hello',
            // Models
            'User'                  => 'Site\Models\User',
        );

        $this->factories = array(
            'Site\Components\Hello' => 'Site\Components\Service\HelloFactory',
        );

        $this->initializers = array(
            'MemcachedManagerAwareInitializer'   => 'Reverb\Lib\MemcachedManagerAwareInitializer',
            'DbConnectionAwareInitializer'       => 'Reverb\Lib\DbConnectionAwareInitializer',
            'DbAdapterAwareInitializer'          => 'Reverb\Lib\DbAdapterAwareInitializer',
        );
    }

    public function GetClass($className)
    {
        if (!isset($this->classes[$className])) {
            return false;
        }

        return $this->classes[$className];
    }

    public function GetInitializers()
    {
        return $this->initializers;
    }
}
