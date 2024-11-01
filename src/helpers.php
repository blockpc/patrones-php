<?php

use Blockpc\PatronesPhp\Adapter\Interfaces\NotificationInterface;

/**
 * The client code can work with any class that follows the Target interface.
 */
function clientNotificationCode(NotificationInterface $notification)
{
    // ...

    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");

    // ...
}