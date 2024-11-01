<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

// clientNotificationCode() is a helper function that expects an instance of the Notification interface.
// This function is in the src/helpers.php file. load by composer autoload

use Blockpc\PatronesPhp\Adapter\Notifications\EmailNotification;
use Blockpc\PatronesPhp\Adapter\Notifications\SlackNotification;
use Blockpc\PatronesPhp\Adapter\SlackApi;

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientNotificationCode($notification);

echo "\n\n";

echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientNotificationCode($notification);