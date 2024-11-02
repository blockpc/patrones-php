<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Templates\Twig;

use Src\AbstractFactory\Interfaces\TitleTemplateInterface;

/**
 * This Concrete Product provides Twig page title templates.
 */
final class TwigTitle implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}