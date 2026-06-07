<?php

namespace App\Patterns\Structure\ValueListHandler;

use Exception;

/**
 * Реализация паттера Value List Handler.
 * Эмулирует работу списка проектов.
 */
class ProjectListHandler extends ValueListHandler
{
    /**
     * Объект доступа к данным
     * @var ProjectDAO
     */
    private ProjectDAO $projectDAO;

    /**
     * Условия выбора
     *
     * @var ProjectTO
     */
    private ProjectTO $projectCriteria;

    public function __construct(ProjectTO $projectTO)
    {
        $this->projectDAO = new ProjectDAO();
        $this->setProjectCriteria($projectTO);
        // Выполняем выборку
        $this->executeSearch();
    }

    /**
     * Устанавливает условие поиска
     *
     * @param ProjectTO $projectTO
     * @return void
     */
    public function setProjectCriteria(ProjectTO $projectTO): void
    {
        $this->projectCriteria = $projectTO;
    }

    /**
     * Выполняет поиск
     * @return void
     */
    public function executeSearch()
    {
        if (!$this->projectCriteria->getFields()) {
            throw new Exception('Unknown criteria');
        }
        $result = $this->projectDAO->executeSelect($this->projectCriteria);

        // Устанавливаем результат в обработчик значений
        $this->setList($result);
    }
}
