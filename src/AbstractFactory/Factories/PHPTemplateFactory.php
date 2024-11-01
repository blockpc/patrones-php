<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Factories;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\PageTemplateInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateFactoryInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateRendererInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TitleTemplateInterface;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Php\PHPTemplatePage;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Php\PHPTemplateRenderer;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Php\PHPTemplateTitle;

final class PHPTemplateFactory implements TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new PHPTemplateTitle();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new PHPTemplatePage($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRendererInterface
    {
        return new PHPTemplateRenderer();
    }
}