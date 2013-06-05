<?php
namespace GH\ActivityStreamSandboxBundle\Navbar;
use Liip\ThemeBundle\ActiveTheme;

use Symfony\Component\HttpFoundation\Request;
use Mopa\Bundle\BootstrapBundle\Navbar\AbstractNavbarMenuBuilder;
use Knp\Menu\ItemInterface;
use Knp\Menu\FactoryInterface;

/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class MenuBuilder extends AbstractNavbarMenuBuilder
{	
    public function createMainMenu(Request $request)
    {
        $menu = $this->createNavbarMenuItem();

        $menu->addChild('Home', array('route' => 'ass_homepage'));
        $menu->addChild('Actvities', array('route' => 'ass_homepage'));
        $menu->addChild('Projects', array('route' => 'project'));
        $menu->addChild('Tickets', array('uri' => 'http://www.symfony.com'));
        
        return $menu;
    }
}
