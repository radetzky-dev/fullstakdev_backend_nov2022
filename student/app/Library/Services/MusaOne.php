<?php
namespace App\Library\Services;
  
class MusaOne
{
    public function sayHelloMusa()
    {
      return 'Hello from MusaOne!';
    }
    
       
    /**
     * getStudentsList
     *
     * @param  mixed $name
     * @return array
     */
    public function getStudentsList(string $name) : array
    {
        $students = ['mario rossi', 'silvia verdi', 'giacomo blue'];

        foreach ($students as &$value) {
            $value= $name.' '.$value;
        }
        return $students;
    }
}