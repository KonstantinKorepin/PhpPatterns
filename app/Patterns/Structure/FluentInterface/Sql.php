<?php

namespace App\Patterns\Structure\FluentInterface;

class Sql
{
    /**
     * Поля для обработки
     *
     * @var array
     */
    private array $fields = [];

    /**
     * Таблицы для обработки
     *
     * @var array
     */
    private array $from = [];

    /**
     * Условия для обработки
     *
     * @var array
     */
    private array $where = [];

    /**
     * Добавляет поля для выборки
     * @param array $fields
     * @return $this
     */
    public function select(array $fields): Sql
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Таблица для выбора
     * @param string $table
     * @param string $alias
     * @return $this
     */
    public function from(string $table, string $alias): Sql
    {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }

    /**
     * Условие выбора
     * @param string $condition
     * @return $this
     */
    public function where(string $condition): Sql
    {
        $this->where[] = $condition;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(', ', $this->where)
        );
    }

}
