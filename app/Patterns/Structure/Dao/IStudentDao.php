<?php

namespace App\Patterns\Structure\Dao;

/**
 * Определяем интерфейс для шаблона доступа к данным
 */
interface IStudentDao
{
    /**
     * Возвращает массив объектов значений
     * @return Student[]
     */
    public function getAllStudents(): array;

    /**
     * Получить студента
     * @param int $no Номер студента
     * @return Student
     */
    public function getStudent(int $no): Student;

    /**
     * Обновить студента
     * @param Student $student
     * @return void
     */
    public function updateStudent(Student $student): void;

    /**
     * Удалить студента
     * @param Student $student
     * @return void
     */
    public function deleteStudent(Student $student): void;
}
