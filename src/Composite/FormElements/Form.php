<?php

declare(strict_types=1);

namespace Src\Composite\FormElements;

use Src\Composite\Abstracts\FieldComposite;

/**
 * And so is the form element.
 */
final class Form extends FieldComposite
{
    protected $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n$output</form>\n";
    }
}
