<?php

namespace Site\Components;

use Reverb\System\ComponentBase;
use Site\Models\HouseholdRepository;

class Hello extends ComponentBase
{
    protected function
    RequiresAuthentication()
    {
        return false;
    }

    protected function 
    Index($params)
    {
        $this->ExposeVariable("msg", "Hello everybody!"); 
    }

}
