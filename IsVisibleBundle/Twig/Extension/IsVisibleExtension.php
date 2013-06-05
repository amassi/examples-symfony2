<?php

namespace GHIsVisibleBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class GHIsVisibleExtension extends \Twig_Extension
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            'gh_is_visible_initialize' => new \Twig_Function_Method($this, 'initialize', array('is_safe' => array('html'))),
        );
    }

    public function initialize(array $parameters = array(), $name = null)
    {
        return $this->container->get('gh_is_visible_helper')->initialize($parameters, 'GHIsVisibleBundle:Form:fields.html.twig');
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'gh_is_visible';
    }
}
