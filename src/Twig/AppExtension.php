<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('monSuperFiltre', array($this, 'monSuperFiltre')),
        );
    }

    public function monSuperFiltre($str)
    {
        return 'Men fiche de '.$str;
    }
}