<?php
/**
 * Created by PhpStorm.
 * User: bensmith
 * Date: 25/11/15
 * Time: 12:46
 */

namespace Site\Components\Service;

use Reverb\System\DependencyContainer;
use Site\Components\Hello;

class HelloFactory {

    public function CreateInstance(DependencyContainer $dependencyContainer)
    {
        return new Hello();
    }
}