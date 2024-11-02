<?php

declare(strict_types=1);

namespace Src\Decorator\Interfaces;

/**
 * The Component interface declares a filtering method that must be implemented
 * by all concrete components and decorators.
 */
interface InputFormat
{
    public function formatText(string $text): string;
}
