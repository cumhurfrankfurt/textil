<?php

namespace dtextil\Containers;

use Plenty\Plugin\Templates\Twig;

class dtextilItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('dtextil::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}