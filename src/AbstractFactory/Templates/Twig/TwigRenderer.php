<?php

declare(strict_types=1);

namespace Blockpc\PatronesPhp\AbstractFactory\Templates\Twig;

use Blockpc\PatronesPhp\AbstractFactory\Interfaces\TemplateRendererInterface;

final class TwigRenderer implements TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new \Twig\Loader\ArrayLoader([
            'index' => $templateString,
        ]);
        $twig = new \Twig\Environment($loader);

        return $twig->render('index', $arguments);
    }
}