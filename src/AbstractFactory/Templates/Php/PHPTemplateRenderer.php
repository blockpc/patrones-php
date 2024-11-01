<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Templates\Php;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateRendererInterface;

final class PHPTemplateRenderer implements TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}