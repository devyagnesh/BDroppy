<?php

namespace BDroppy\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class BDroppyController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('BDroppy::Index');
    }
}