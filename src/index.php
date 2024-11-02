<?php

// Copiar en public/index.php

use Src\AbstractFactory\Factories\PHPTemplateFactory;
use Src\AbstractFactory\Factories\TwigTemplateFactory;
use Src\AbstractFactory\Page;

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Uncomment the following if you have Twig installed.

// echo "Testing rendering with the Twig factory:\n"; 
// echo $page->render(new TwigTemplateFactory());
