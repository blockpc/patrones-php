<?php

declare(strict_types=1);

namespace Src\FactoryMethod\Posters;

use Src\FactoryMethod\Abstracts\SocialNetworkPoster;
use Src\FactoryMethod\Connectors\FacebookConnector;
use Src\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * This Concrete Creator supports Facebook. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
 */
class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
