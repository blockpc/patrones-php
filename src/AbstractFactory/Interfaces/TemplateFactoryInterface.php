<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Interfaces;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface;

    public function createPageTemplate(): PageTemplateInterface;
    
    public function getRenderer(): TemplateRendererInterface;
}