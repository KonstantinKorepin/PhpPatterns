<?php

namespace App\Patterns\Structure\ValueListHandler;

/**
 * Критерии выбора проектов
 */
class ProjectTO
{
    /**
     * Поля фильтров
     *
     * @var array
     */
    private array $fields = [];

    /**
     * Возвращает фильтры
     *
     * @return array|string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Идентификатор
     *
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->fields['id'] = $id;
    }

    /**
     * Получение идентификатора
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->fields['id'];
    }

    /**
     * Установить имя
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->fields['name'] = $name;
    }

    /**
     * Возвращает имя
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->fields['name'];
    }
}
