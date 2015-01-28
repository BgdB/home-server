<?php

namespace FOSUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppFOSUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}