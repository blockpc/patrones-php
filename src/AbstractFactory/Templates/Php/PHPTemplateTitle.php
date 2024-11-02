<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Templates\Php;

use Src\AbstractFactory\Interfaces\TitleTemplateInterface;

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