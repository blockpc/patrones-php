<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factories;

use Src\AbstractFactory\Interfaces\PageTemplateInterface;
use Src\AbstractFactory\Interfaces\TemplateFactoryInterface;
use Src\AbstractFactory\Interfaces\TemplateRendererInterface;
use Src\AbstractFactory\Interfaces\TitleTemplateInterface;
use Src\AbstractFactory\Templates\Twig\TwigPage;
use Src\AbstractFactory\Templates\Twig\TwigRenderer;
use Src\AbstractFactory\Templates\Twig\TwigTitle;

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