<?php

declare(strict_types=1);

namespace Src\Composite\Abstracts;

/**
 * The base Component class declares an interface for all concrete components,
 * both simple and complex.
 *
 * In our example, we'll be focusing on the rendering behavior of DOM elements.
 */
abstract class FormElement
{
    /**
     * We can anticipate that all DOM elements require these 3 fields.
     */
    protected $data = [];

    public function __construct(protected string $name, protected string $title)
    {
        // ...
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Each concrete DOM element must provide its rendering implementation, but
     * we can safely assume that all of them are returning strings.
     */
    abstract public function render(): string;
}
