<?php

abstract class Model extends Connection
{
    public string $table_name;

    public static function query(): static
    {
        return new static();
    }

    public function insert(array $data): mysqli_result|bool
    {
        $keys = implode(', ',array_keys($data));

        $values = implode(', ', array_values($data));

        $query = "INSERT INTO `$this->table_name` ($keys) VALUES ($values)";

        return mysqli_query($this->init(), $query);
    }
    public function update(array $data)
    {

    }
    public function select(array $columns, array $where = []): bool|array|null
    {
        $columns = implode(', ', $columns);

        $query = "SELECT $columns FROM `$this->table_name`";

        if (count($where)) {
            $key = array_keys($where)[0] ?? '';
            $value = array_values($where)[0] ?? '';

            $query .= " WHERE `$key` = '$value'";
        }

        $result = mysqli_query($this->init(), $query);

        return mysqli_fetch_all($result);
    }
    public function delete(array $data)
    {

    }
}