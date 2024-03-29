@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
       <?php
         $id = Auth::user()->id;
         echo "User id ".$id."<br> Session ".Session::getId();
        ?>
        <p class="lead">Sei autenticato. Ciao {{auth()->user()->username}}</p>
        <a class="btn btn-lg btn-primary" href="https://google.com" role="button">Cerca su Google &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">NON SEI LOGGATO. Loggati.</p>
        <?php
           echo "Session ".Session::getId();
        ?>
        @endguest
    </div>
@endsection