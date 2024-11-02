<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

// clientBridgeCode() is a helper function that expects an instance of the Notification interface.
// This function is in the src/helpers.php file. load by composer autoload

use Src\Bridge\ConcreteAbstractions\ProductPage;
use Src\Bridge\ConcreteAbstractions\SimplePage;
use Src\Bridge\ConcreteImplementations\HTMLRenderer;
use Src\Bridge\ConcreteImplementations\JsonRenderer;
use Src\Bridge\Product;

header('Content-type: text/plain');

/**
 * The client code can be executed with any pre-configured combination of the
 * Abstraction+Implementation.
 */
$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:\n";
clientBridgeCode($page);

echo "\n\n";

/**
 * The Abstraction can change the linked Implementation at runtime if needed.
 */
$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:\n";
clientBridgeCode($page);

echo "\n\n";


$product = new Product("123", "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg", 39.95);

$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:\n";
clientBridgeCode($page);

echo "\n\n";

$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:\n";
clientBridgeCode($page);