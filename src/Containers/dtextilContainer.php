<?php

namespace dtextil\Containers;

use Plenty\Plugin\Templates\Twig;

class dtextilContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('dtextil::Stylesheet');
    }
}