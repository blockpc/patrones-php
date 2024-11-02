<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

// composite() is a helper function that expects an instance of the FormElement.
// This function is in the src/helpers.php file. load by composer autoload

use Src\Composite\FormElements\Fieldset;
use Src\Composite\FormElements\Form;
use Src\Composite\FormElements\Input;

header('Content-type: text/plain');

/**
 * The client code gets a convenient interface for building complex tree
 * structures.
 */
$form = new Form('product', "Add product", "/product/add");
$form->add(new Input('name', "Name", 'text'));
$form->add(new Input('description', "Description", 'text'));

$picture = new Fieldset('photo', "Product photo");
$picture->add(new Input('caption', "Caption", 'text'));
$picture->add(new Input('image', "Image", 'file'));
$form->add($picture);

/**
 * The form structure can be filled with data from various sources. The Client
 * doesn't have to traverse through all form fields to assign data to various
 * fields since the form itself can handle that.
 */
$form->setData([
    'name' => 'Apple MacBook',
    'description' => 'A decent laptop.',
    'photo' => [
        'caption' => 'Front photo.',
        'image' => 'photo1.png',
    ],
]);

composite($form);