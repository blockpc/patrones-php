<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factories;

use Src\AbstractFactory\Interfaces\PageTemplateInterface;
use Src\AbstractFactory\Interfaces\TemplateFactoryInterface;
use Src\AbstractFactory\Interfaces\TemplateRendererInterface;
use Src\AbstractFactory\Interfaces\TitleTemplateInterface;
use Src\AbstractFactory\Templates\Php\PHPTemplatePage;
use Src\AbstractFactory\Templates\Php\PHPTemplateRenderer;
use Src\AbstractFactory\Templates\Php\PHPTemplateTitle;

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