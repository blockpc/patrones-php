<?php

declare(strict_types=1);

// copy and paste the following code into your public/index.php file

// clientBuilderCode() is a helper function that expects an instance of the Notification interface.
// This function is in the src/helpers.php file. load by composer autoload

use Blockpc\PatronesPhp\Builder\Builders\MysqlQueryBuilder;
use Blockpc\PatronesPhp\Builder\Builders\PostgresQueryBuilder;

/**
 * The application selects the proper query builder type depending on a current
 * configuration or the environment settings.
 */

// if ($_ENV['database_type'] == 'postgres') {
//     $builder = new PostgresQueryBuilder(); 
// } else {
//     $builder = new MysqlQueryBuilder(); 
// }

// clientBuilderCode($builder);

echo "Testing MySQL query builder:\n";
clientBuilderCode(new MysqlQueryBuilder());

echo "\n\n";

echo "Testing PostgresSQL query builder:\n";
clientBuilderCode(new PostgresQueryBuilder());
