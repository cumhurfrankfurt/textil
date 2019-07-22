<?php

namespace dtextil\Containers;

use Plenty\Plugin\Templates\Twig;

class dtextilItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('dtextil::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}