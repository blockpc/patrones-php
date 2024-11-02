<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Templates\Php;

use Src\AbstractFactory\Templates\BasePageTemplate;

/**
 * The PHPTemplate variant of the whole page templates.
 */
final class PHPTemplatePage extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}