<?php

namespace dtextil\Containers;

use Plenty\Plugin\Templates\Twig;

class dtextilItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('dtextil::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}