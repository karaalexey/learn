<?php

interface SqlQueryBuilderInterface
{
    public function reset();
    public function select(string $fields): SqlQueryBuilderInterface;
    public function from(string $table): SqlQueryBuilderInterface;
    public function where(string $field, string $operator, string $value): SqlQueryBuilderInterface;
    public function getSql(): string;
}