<?php

declare(strict_types=1);

use Src\Decorator\Decorators\DangerousHTMLTagsFilter;
use Src\Decorator\Decorators\MarkdownFormat;
use Src\Decorator\Decorators\PlainTextFilter;
use Src\Decorator\Texts\TextInput;

// copy and paste the following code into your public/index.php file

// decorator() is a helper function that expects an instance of the InputFormat and string.
// This function is in the src/helpers.php file. load by composer autoload

header('Content-type: text/plain');

/**
 * Input formatters are very handy when dealing with user-generated content.
 * Displaying such content "as is" could be very dangerous, especially when
 * anonymous users can generate it (e.g. comments). Your website is not only
 * risking getting tons of spammy links but may also be exposed to XSS attacks.
 */
$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

/**
 * Naive comment rendering (unsafe).
 */
$naiveInput = new TextInput();
echo "Website renders comments without filtering (unsafe):\n";
decorator($naiveInput, $dangerousComment);

echo "\n\n";

/**
 * Filtered comment rendering (safe).
 */
$filteredInput = new PlainTextFilter($naiveInput);
echo "Website renders comments after stripping all tags (safe):\n";
decorator($filteredInput, $dangerousComment);

echo "\n\n";


/**
 * Decorator allows stacking multiple input formats to get fine-grained control
 * over the rendered content.
 */
$dangerousForumPost = <<<HERE
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

/**
 * Naive post rendering (unsafe, no formatting).
 */
$naiveInput = new TextInput();
echo "Website renders a forum post without filtering and formatting (unsafe, ugly):\n";
decorator($naiveInput, $dangerousForumPost);

echo "\n\n";

/**
 * Markdown formatter + filtering dangerous tags (safe, pretty).
 */
$text = new TextInput();
$markdown = new MarkdownFormat($text);
$filteredInput = new DangerousHTMLTagsFilter($markdown);
echo "Website renders a forum post after translating markdown markup" .
    " and filtering some dangerous HTML tags and attributes (safe, pretty):\n";
decorator($filteredInput, $dangerousForumPost);
