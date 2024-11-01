<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Templates;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\PageTemplateInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TitleTemplateInterface;

/**
 * The page template uses the title sub-template, so we have to provide the way
 * to set it in the sub-template object. The abstract factory will link the page
 * template with a title template of the same variant.
 */
abstract class BasePageTemplate implements PageTemplateInterface
{
    protected $titleTemplate;

    public function __construct(TitleTemplateInterface $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}