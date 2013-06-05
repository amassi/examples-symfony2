<?php

namespace GH\IsVisibleBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\Templating\EngineInterface;

class GHIsVisibleHelper extends Helper
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * Returns the HTML necessary for initializing the JavaScript SDK.
     *
     * The default template includes the following parameters:
     *
     * @param array  $parameters An array of parameters for the initialization template
     * @param string $name       A template name
     *
     * @return string An HTML string
     */
    public function initialize(array $parameters = array(), $name = null)
    {
        return $this->templating->render($name, $parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'gh_is_visible';
    }
}
