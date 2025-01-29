<?php

namespace App\Repository;

class StudentRepository
{

private array $students = [
    4 => 'Mark',
    1 => 'John',
    5 => 'Smith',
];

public function getStudents()
{
    return $this->students;    
}

public function getStudentById($id)
{
    return $this->students[$id];
}

}