<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

use Src\AbstractFactory\Factories\PHPTemplateFactory;
use Src\AbstractFactory\Factories\TwigTemplateFactory;
use Src\AbstractFactory\Page;

header('Content-type: text/plain');

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());

echo "Hola mundo.\n\n";

// Uncomment the following if you have Twig installed.

echo "Testing rendering with the Twig factory:\n"; 
echo $page->render(new TwigTemplateFactory());