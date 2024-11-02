<?php

declare(strict_types=1);

namespace Src\Decorator\Texts;

use Src\Decorator\Interfaces\InputFormat;

/**
 * The Concrete Component is a core element of decoration. It contains the
 * original text, as is, without any filtering or formatting.
 */
final class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
