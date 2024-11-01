<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Factories;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\PageTemplateInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateFactoryInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateRendererInterface;
use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TitleTemplateInterface;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Twig\TwigPage;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Twig\TwigRenderer;
use Blockpc\PatronesPhp\AbstractFactory\Templates\Twig\TwigTitle;

final class TwigTemplateFactory implements TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new TwigTitle();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new TwigPage($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRendererInterface
    {
        return new TwigRenderer();
    }
}