<?php

declare(strict_types=1);

namespace Src\Decorator\Decorators;

use Src\Decorator\Texts\TextFormat;

/**
 * This Concrete Decorator strips out all HTML tags from the given text.
 */
final class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}
