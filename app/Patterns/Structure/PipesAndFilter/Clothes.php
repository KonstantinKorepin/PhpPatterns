<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Класс одежды
 *
 */
class Clothes
{
    /**
     * Нужна ли глажка
     *
     * @var bool
     */
    private bool $isIron = false;

    /**
     * Плечики
     *
     * @var bool
     */
    private bool $isShoulder = false;

    /**
     * Нужно сшить
     *
     * @var bool
     */
    private bool $isThreadNeed = false;

    public function isDirty(): bool
    {
        return $this->isThreadNeed() || $this->isIron() || $this->isShoulders();
    }

    /**
     * Нужна ли глажка
     *
     * @return bool
     */
    public function isIron(): bool
    {
        return $this->isIron;
    }

    /**
     * Пометить глажку
     *
     * @return $this
     */
    public function setIron(): self
    {
        $this->isIron = true;
        return $this;
    }

    /**
     * Нужны ли плечики
     *
     * @return bool
     */
    public function isShoulders(): bool
    {
        return $this->isShoulder;
    }

    /**
     * Пометить плечики
     *
     * @return $this
     */
    public function setShoulders(): self
    {
        $this->isShoulder = true;
        return $this;
    }

    /**
     * Нужно ли шитье
     *
     * @return bool
     */
    public function isThreadNeed(): bool
    {
        return $this->isThreadNeed;
    }

    /**
     * Пометить шитье
     *
     * @return $this
     */
    public function setThreadNeed(): self
    {
        $this->isThreadNeed = true;
        return $this;
    }
}
