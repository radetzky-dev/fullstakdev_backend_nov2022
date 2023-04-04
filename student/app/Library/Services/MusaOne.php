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
     * @return array
     */
    public function getStudentsList() : array
    {
        $students = ['mario rossi', 'silvia verdi', 'giacomo blue'];
        return $students;
    }
}