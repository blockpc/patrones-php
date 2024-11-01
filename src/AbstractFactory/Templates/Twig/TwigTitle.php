<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Templates\Twig;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TitleTemplateInterface;

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