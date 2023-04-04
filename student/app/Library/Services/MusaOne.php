<?php
namespace App\Library\Services;

class MusaOne
{
    protected $companyName;
    public function __construct(string $companyName)
    {
        $this->companyName = $companyName;
    }

    public function sayHelloMusa()
    {
        return 'Hello from '.$this->companyName;
    }

    /**
     * getStudentsList
     *
     * @param  mixed $name
     * @return array
     */
    public function getStudentsList(string $name): array
    {

        $students = ['mario rossi', 'silvia verdi', 'giacomo blue'];

        foreach ($students as &$value) {
            $value = $name . ' ' . $value;
        }
        return $students;
    }
}
