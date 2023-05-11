@extends('layout')

@section('content')


    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Show student
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="#">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" readonly/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}" readonly/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" readonly/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $student->password }}" readonly/>
                </div>
            </form>
        </div>
    </div>
@endsection
