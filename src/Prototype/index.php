<?php

declare(strict_types=1);

use Src\Prototype\Author;
use Src\Prototype\Page;

// copy and paste the following code into your public/index.php file

// prototype() is a helper function that expects an instance of the Page.
// This function is in the src/helpers.php file. load by composer autoload

header('Content-type: text/plain');

$author = new Author("John Smith");
$page = new Page("Tip of the day", "Keep calm and carry on.", $author);

$draft = prototype($page, "Nice tip, thanks!");

echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
print_r($draft);
