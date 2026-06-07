<?php

namespace App\Patterns\Structure\Dao;

/**
 * Реализует интерфейс доступа к данным
 */
class StudentDaoImpl implements IStudentDao
{

    /**
     * Массив объектов студентов
     * @var array
     */
    private array $students;

    public function __construct()
    {
        $this->students[] = new Student('Student one', 1);
        $this->students[] = new Student('Student two', 2);
        $this->students[] = new Student('Student three', 3);
    }

    /**
     * @return array
     */
    public function getAllStudents(): array
    {
        return $this->students;
    }

    /**
     * @param int $no
     * @return Student
     */
    public function getStudent(int $no): Student
    {
        return $this->students[$no];
    }

    /**
     * @param Student $student
     * @return void
     */
    public function updateStudent(Student $student): void
    {
        $this->students[$student->getRollNo()]->setName($student->getName());
    }

    /**
     * @param Student $student
     * @return void
     */
    public function deleteStudent(Student $student): void
    {
        unset($this->students[$student->getRollNo()]);
        echo $student->getRollNo() . ' deleted.' . PHP_EOL;
    }
}
