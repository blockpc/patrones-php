<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Templates\Php;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TitleTemplateInterface;

/**
 * And this Concrete Product provides PHPTemplate page title templates.
 */
final class PHPTemplateTitle implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}