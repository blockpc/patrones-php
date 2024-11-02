<?php

declare(strict_types=1);

namespace Src\Bridge\ConcreteAbstractions;

use Src\Bridge\Abstracts\PageBridge;
use Src\Bridge\Interfaces\Renderer;

/**
 * This Concrete Abstraction represents a simple page.
 */
final class SimplePage extends PageBridge
{
    protected $title;
    protected $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderTextBlock($this->content),
            $this->renderer->renderFooter()
        ]);
    }
}
