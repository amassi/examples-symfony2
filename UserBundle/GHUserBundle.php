<?php

namespace GH\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GHUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
