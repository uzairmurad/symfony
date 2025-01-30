<?php

namespace App\Repository;

use Psr\Log\LoggerInterface;


class StudentRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }

    private array $students = [
        4 => 'Mark',
        1 => 'John',
        5 => 'Smith',
    ];

    public function getStudents()
    {
        $this->logger->info("We are now accessing from this repository class.");
        return $this->students;
    }

    public function getStudentById($id)
    {
        return $this->students[$id];
    }
}
