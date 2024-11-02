<?php

declare(strict_types=1);

namespace Src\Builder\Interfaces;

/**
 * The Builder interface declares a set of methods to assemble an SQL query.
 *
 * All of the construction steps are returning the current builder object to
 * allow chaining: $builder->select(...)->where(...)
 */
interface SQLQueryBuilderInterface
{
    public function select(string $table, array $fields): SQLQueryBuilderInterface;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilderInterface;

    public function limit(int $start, int $offset): SQLQueryBuilderInterface;

    // +100 other SQL syntax methods...

    public function getSQL(): string;
}