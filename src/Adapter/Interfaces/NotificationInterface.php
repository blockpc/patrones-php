<?php

declare(strict_types=1);

namespace Src\Adapter\Interfaces;

/**
 * The Target interface represents the interface that your application's classes
 * already follow.
 */
interface NotificationInterface
{
    public function send(string $title, string $message);
}