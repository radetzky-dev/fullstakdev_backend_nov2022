@extends('layout')

@section('content')

    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <table class="table">
            <thead>
            <tr class="table-warning">
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($studentList as $student)
                <tr>
                    <td>{{$student}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>

@endsection