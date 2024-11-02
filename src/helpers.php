<?php

use Src\Adapter\Interfaces\NotificationInterface;
use Src\Bridge\Abstracts\PageBridge;
use Src\Builder\Interfaces\SQLQueryBuilderInterface;
use Src\Composite\Abstracts\FormElement;
use Src\FactoryMethod\Abstracts\SocialNetworkPoster;

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

/**
 * Note that the client code uses the builder object directly. A designated
 * Director class is not necessary in this case, because the client code needs
 * different queries almost every time, so the sequence of the construction
 * steps cannot be easily reused.
 *
 * Since all our query builders create products of the same type (which is a
 * string), we can interact with all builders using their common interface.
 * Later, if we implement a new Builder class, we will be able to pass its
 * instance to the existing client code without breaking it thanks to the
 * SQLQueryBuilder interface.
 */
function clientBuilderCode(SQLQueryBuilderInterface $queryBuilder)
{
    // ...

    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

    echo $query;

    // ...
}

/**
 * The client code usually deals only with the Abstraction objects.
 */
function clientBridgeCode(PageBridge $page)
{
    // ...

    echo $page->view();

    // ...
}

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientFactoryMethodCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * Composite pattern
 * The client code can work with form elements using the abstract interface.
 * This way, it doesn't matter whether the client works with a simple component
 * or a complex composite tree.
 */
function composite(FormElement $form)
{
    // ..

    echo $form->render();

    // ..
}
