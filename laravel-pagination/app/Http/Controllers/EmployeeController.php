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
}
