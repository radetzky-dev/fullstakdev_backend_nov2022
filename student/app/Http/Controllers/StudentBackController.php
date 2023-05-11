<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentBackController extends Controller
{
    public function getId(string $id)
    {
        //echo "get id ".$id;
        $student = DB::select('select * from students where id = ?', [$id]);

      /*  $student = DB::select('select * from students where id = :id and name = :name', 
        ['id' => 1,'name'=>'Osea Battaglia(Salerno)(Quarto Romolo laziale)']);

        */

      //  var_dump($student);
      
      //  $student = DB::select("select * from students where id = $id");
        $student = $student[0];
        return view('show', compact('student'));
    }

    public function getAll()
    {
        //echo "get id ".$id;
        $student = DB::select('select * from students');
        return view('index', compact('student'));
    }

    public function insertFlight()
    {

        DB::insert('insert into flights (id, name,airline,capitale_sociale,email,students_id) 
        values (?, ?,?,?,?,?)', 
        [1, 'Marc','ITA',1000,'test@tets.it',1]);

        echo "Inserito con successo!";
    }

    public function updateFlight()
    {
        DB::update(
            'update flights set name = \'Giovanni\' where name = ?',
            ['Marc']
        );
        echo "Update con successo!";
    }

    public function deleteFlight()
    {
        DB::delete('delete from flights');
        echo "Cancellato tutto con successo!";
    }

    public function doPayment()
    {
        //servicePayment ->
    }

    /* SERVICE
    DB::beginTransaction();

try {
    DB::insert(...);
    Log inserito 1
    DB::insert(...);
      Log inserito 2
    DB::update(...);
    Log inserito 3

    DB::commit();
    // all good
} catch (\Exception $e) {
    DB::rollback();
    Log:error eè adnato male
    // something went wrong
}
    */

}
