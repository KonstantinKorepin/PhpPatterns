<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\ValueObject\StudentBO;
use Tests\TestCase;

class ValueObjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
0 : Robert
0 : John
0 : NewName
EOD;

        $this->expectOutputString($str);

        $studentBO = new StudentBO();

        // all
        foreach ($studentBO->getStudents() as $student) {
            echo $student->getRollNo() . ' : ' . $student->getName() . PHP_EOL;
        }

        // update
        $studentForUpdate = $studentBO->getStudent(1);
        $studentForUpdate->setName('NewName');
        $studentBO->updateStudent($studentForUpdate);

        // get updated
        $newStudent = $studentBO->getStudent(1);
        echo $newStudent->getRollNo() . ' : ' . $newStudent->getName();
    }
}
