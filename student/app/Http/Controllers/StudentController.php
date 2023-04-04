<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\SchoolbusService;
use App\Services\SendMailService;
use App\Services\CreatePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Library\Services\MusaOne;

class StudentController extends Controller
{
    protected $sendmailService;

    public function __construct(SendMailService $sendmailService)
    {
        $this->sendmailService = $sendmailService;
    }

    public function musa(MusaOne $musaServiceInstance)
    {
        echo $musaServiceInstance->sayHelloMusa();
    }

    public function musastudents(MusaOne $musaServiceInstance, string $name)
    {
        $studentList= $musaServiceInstance->getStudentsList($name);
        return view('musa', compact('studentList'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        $student = Student::create($storeData);
        return redirect('/students')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        Student::whereId($id)->update($updateData);

        return redirect('/students')->with('success', 'Studente ' . $request->input("name") . ' aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $name = $student->name;
        $student->delete();
        return redirect('/students')->with('success', 'Studente ' . $name . ' cancellato');
    }

    public function search(Request $request)
    {
        $find = $request->input('cerca');
        $student = Student::where('name', 'LIKE', '%' . $find . '%')
            ->orWhere('email', 'LIKE', '%' . $find . '%')
            ->get();
        /*    foreach ($results as $result) {
        echo $result->name . " ". $result->email.'<br>';
        } */
        return view('index', compact('student'));
    }

    public function sendmail()
    {
        echo $this->sendmailService->send();
    }

    public function sendmailTo($to)
    {
        echo $this->sendmailService->sendTo($to);
    }

    public function timetable()
    {
        return SchoolbusService::timetable();
    }

 //TODO inserire servizio crea pdf
 
    public function getbustime()
    {
        App::bind('SchoolbusService', function () {
            return new SchoolbusService();
        });

        $bus = App::make("SchoolbusService");
        return $bus->drivers();
    }
    public function exportPdf()
    {
        return CreatePdf::createPdf();
    }

}
