<?php

include 'SqlQueryBuilderInterface.php';
class SqlQueryBuilder implements SqlQueryBuilderInterface
{
    protected $query;

    public function reset(): void
    {
        $this->query = new \stdClass();
    }

    public function select(string $fields): SqlQueryBuilderInterface
    {
        $this->reset();
        $this->query = 'SELECT ' . $fields;
        return $this;
    }

    public function from(string $table): SqlQueryBuilderInterface
    {
        $this->query .= ' FROM ' . $table;
        return $this;
    }

    public function where(string $field, string $operator, string $value): SqlQueryBuilderInterface
    {
        $this->query .= ' WHERE ' . $field . $operator . $value;
        return $this;
    }

    public function getSql(): string
    {
       return $this->query;
    }

}
function qest(SqlQueryBuilderInterface $queryBuilder)
{
    $sql = $queryBuilder
        ->select('user')
        ->from('users')
        ->where('id', '>', 4)
        ->getSql();
    $sql = '"'. $sql.'";';
    echo $sql;
}

qest(new SqlQueryBuilder());