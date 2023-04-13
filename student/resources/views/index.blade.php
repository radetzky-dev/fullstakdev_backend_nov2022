@extends('layout')
@section('content')
    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <h3>Lista studenti</h3>

    @env('local')
    <p>Sto sviluppando in locale</p>
    debug {{ $student }}
    @endenv

    @env('production')
    <p>Sono in produzione!</p>
    @endenv

    @sectionMissing('prova')
        <div class="pull-right">
            <p>Questa è la sezione di prova</p>
        </div>
    @endif

    <div class="push-top">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <div class="mb-2 d-flex justify-content-end">
            <a class="btn btn-outline-info  " href="{{ url('exportpdf') }}">Eporta in PDF </a>
        </div>
        <table class="table">
            <thead>
                <tr class="table-warning">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Password</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $students)
                    <tr>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->password }}</td>
                        <td class="text-center">
                            <a href="{{ route('students.edit', $students->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $students->id) }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                            <a href="{{ route('students.show', $students->id) }}" class="btn btn-primary btn-sm">Mostra</a>

                            <a href="{{ route('sendmailto', $students->id) }}" class="btn btn-primary btn-sm">Mail</a>

                            <a href="{{ route('creadiploma', $students->name) }}" class="btn btn-primary btn-sm">Stampa
                                diploma</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

<?php $myVar=6; ?>

@switch($myVar)
    @case(1)
        First case...
        @break
 
    @case(5)
        Vale cinque!
        @break
 
    @default
        Valore di default
@endswitch

<hr>


    </div>
@endsection
