<?php

namespace App\Http\Controllers;

use App\Library\Services\MusaOne;
use App\Models\Student;
use App\Services\CreatePdf;
use App\Services\SchoolbusService;
use App\Services\SendMailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

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
        $studentList = $musaServiceInstance->getStudentsList($name);
        return view('musa', compact('studentList'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info( __CLASS__.' '. __FUNCTION__ .' Mostro la lista degli studenti...');

        $student = Student::all();
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::debug( __CLASS__.' '. __FUNCTION__ .' Creo un nuovo studente...');
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::debug( __CLASS__.' '. __FUNCTION__ .' Provo a creare un nuovo studente con nome :' . $request->name);
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        Log::debug('Validazione OK, inserisco nel db');

        try {
            throw new \RuntimeException("mia eccezione erroe numero riga...");
        } catch (\RuntimeException $e) {
            Log::error("Class: " . __CLASS__. ", Function: " . __FUNCTION__);

            Log::error(' ERRORE nel salvataggio! ' . $e->getMessage());
        }

        $student = Student::create($storeData);
        return redirect('/students')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::info( __CLASS__.' '. __FUNCTION__ .' Cerco utente con id: ' . $id);
        $student = Student::findOrFail($id);
        Log::info('Utente trovato con nome ' . $student->name);
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
    
    /**
     * search
     *
     * @param  mixed $request
     * @return void
     */
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
    
    /**
     * sendmail
     *
     * @return void
     */
    public function sendmail()
    {
        echo $this->sendmailService->send();
    }
    
    /**
     * sendmailTo
     *
     * @param  mixed $to
     * @return void
     */
    public function sendmailTo($to)
    {
        echo $this->sendmailService->sendTo($to);
    }

    public function timetable()
    {
        return SchoolbusService::timetable();
    }

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
        $student = Student::all();
        return CreatePdf::createPdfWithData($student, 'pdf_view');
    }

    /**
     * createDiploma
     *
     * @param  mixed $name
     * @param  mixed $voto
     */
    public function createDiploma($name)
    {
        $voto = rand(60, 100);
        $data = [
            "name" => $name,
            "voto" => $voto,
        ];

        return CreatePdf::createPdfDiploma($data);
    }

    public function passaParams()
    {
        $data = [
            "nome" => "Mario",
            "cognome" => "Rossi",
            "age" => 17,
        ];
        return view("multiparams", $data);
    }

    public function componenti()
    {
        return view("componenti");
    }

}
