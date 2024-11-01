<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Interfaces;

/**
 * For instance, this Abstract Product interface describes the behavior of page
 * title templates.
 */
interface TitleTemplateInterface
{
    public function getTemplateString(): string;
}