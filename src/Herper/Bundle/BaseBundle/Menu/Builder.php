<?php
/**
 * Created by PhpStorm.
 * User: Svenja
 * Date: 25.05.2015
 * Time: 14:29
 */

namespace Herper\Bundle\BaseBundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'herper_base_homepage'));
        $menu->addChild('NonSense');
        $menu['NonSense']->addChild("Yeahh");
        $menu['NonSense']->addChild("Boooh");
        return $menu;
    }

}