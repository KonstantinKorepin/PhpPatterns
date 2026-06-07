<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Dao\StudentDaoImpl;
use Tests\TestCase;

class DaoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
1 : Student one
2 : Student two
3 : Student three
2 : NewName
EOD;

        $this->expectOutputString($str);

        $studentDao = new StudentDaoImpl();
        // all
        foreach ($studentDao->getAllStudents() as $student) {
            echo $student->getRollNo() . " : " . $student->getName() . PHP_EOL;
        }

        // update
        $studentForUpdate = $studentDao->getStudent(1);
        $studentForUpdate->setName('NewName');
        $studentDao->updateStudent($studentForUpdate);

        // get updated
        $newStudent = $studentDao->getStudent(1);
        echo $newStudent->getRollNo() . ' : ' . $newStudent->getName();
    }
}
