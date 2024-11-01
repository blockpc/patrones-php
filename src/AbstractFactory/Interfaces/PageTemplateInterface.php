<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Interfaces;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplateInterface
{
    public function getTemplateString(): string;
}