<?php

namespace App\Patterns\Creational\ResourceAcquisi;

use Exception;

class FileGuard
{
    /**
     * Файл обработки
     * @var false|resource
     */
    private $file;

    /**
     * Путь к файлу с локом
     * @var string
     */
    private string $lockPath;

    public function __construct(string $fileName)
    {
        $filePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . $fileName;
        $this->lockPath = $filePath . '.lock';

        if (file_exists($this->lockPath)) {
            throw new Exception("Не удалось получить блокировку!");
        }

        $this->file = fopen($filePath, "a+");
        $lock = fopen($this->lockPath, "a");
        fclose($lock);

        ftruncate($this->file, 0);
    }

    /**
     * Деструктор реализует освобождение ресурса
     */
    public function __destruct()
    {
        fclose($this->file);
        unlink($this->lockPath);
    }

    /**
     * Пишет в ресурс строку
     * @param string $text
     * @return void
     */
    public function write(string $text)
    {
        fwrite($this->file, $text);
    }
}
