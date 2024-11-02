<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

// clientFactoryMethodCode() is a helper function that expects an instance of the Notification interface.
// This function is in the src/helpers.php file. load by composer autoload

use Src\FactoryMethod\Posters\FacebookPoster;
use Src\FactoryMethod\Posters\LinkedInPoster;

header('Content-type: text/plain');

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing FacebookPoster:\n";
clientFactoryMethodCode(new FacebookPoster("mail@facebook.com", "******"));

echo "\n\n";

echo "Testing LinkedInPoster:\n";
clientFactoryMethodCode(new LinkedInPoster("mail@linkedin.com", "******"));
