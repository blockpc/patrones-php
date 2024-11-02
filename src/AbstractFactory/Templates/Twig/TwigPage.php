<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Templates\Twig;

use Src\AbstractFactory\Templates\BasePageTemplate;

/**
 * The Twig variant of the whole page templates.
 */
final class TwigPage extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}