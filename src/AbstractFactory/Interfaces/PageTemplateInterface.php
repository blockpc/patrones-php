<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Interfaces;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplateInterface
{
    public function getTemplateString(): string;
}