<?php
namespace App\Http\Controllers;

use App\Models\Employee;

// app > http > controllers > EmployeeController.php
class EmployeeController extends Controller
{
    public function getData()
    {
        $employees = Employee::paginate(12);
        return view('home', compact('employees'));
    }

    public function getAll()
    {

        $employee = Employee::where('firstname', 'Elena')->first();

        //var_dump($employee);

        echo $employee->id. ' '. $employee->firstname. ' '.$employee->lastname.'<br>';

        echo "Check find...<br>";
        $employee = Employee::find($employee->id+1);

        echo "Check find 497...<br>";
        $employee = Employee::find(497);

        echo $employee->id. ' '. $employee->firstname. ' '.$employee->lastname.'<br>';


        $employees = Employee::where('firstname', 'Elena')->get();

        foreach ($employees as $employee) {
            echo $employee->id. ' '.$employee->firstname. ' '.$employee->lastname.'<br>';
        }

        echo "<hr>";
        $employees = Employee::cursor()->filter(function (Employee $employee) {
            return $employee->id > 480;
        });
         
        foreach ($employees as $employee) {
            echo "ID ".$employee->id. ' '.$employee->firstname. ' '.$employee->lastname.'<br>';
        }


       // $employee = Employee::findOrFail(501);
       // var_dump($employee);

        echo "<hr>";

        $flight = Employee::where('firstname', 'Samantha')->firstOr(function () {
            echo "Non c'è nessuno bruno";
        });

        echo $flight->firstname.'<br>';
      
        $result = Employee::findOr(501, function () {
            echo "Non esiste";
            die();
        });

        echo $result->firstname;

        /*
        $count = 0;
        foreach (Employee::all() as $employee) {
            $count++;
            echo $count.') '.$employee->firstname.'<br>';
        }
        */
    }
}
