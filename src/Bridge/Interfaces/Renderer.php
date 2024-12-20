<?php

declare(strict_types=1);

namespace Src\Bridge\Interfaces;

/**
 * In this case, the Implementation lists rendering methods that can be used to
 * compose any web page. Different Abstractions may use different methods of the
 * Implementation.
 */
interface Renderer
{
    public function renderTitle(string $title): string;

    public function renderTextBlock(string $text): string;

    public function renderImage(string $url): string;

    public function renderLink(string $url, string $title): string;

    public function renderHeader(): string;

    public function renderFooter(): string;

    public function renderParts(array $parts): string;
}
