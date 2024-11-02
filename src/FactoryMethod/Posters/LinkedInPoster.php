<?php

declare(strict_types=1);

namespace Src\FactoryMethod\Posters;

use Src\FactoryMethod\Abstracts\SocialNetworkPoster;
use Src\FactoryMethod\Connectors\LinkedInConnector;
use Src\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * This Concrete Creator supports LinkedIn.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
