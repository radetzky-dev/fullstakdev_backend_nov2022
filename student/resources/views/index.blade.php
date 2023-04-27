@extends('layout')
@section('content')
    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <h3>Lista studenti</h3>

    <div class="test">questo cambia colore grazie a vite</div>

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
            <a class="btn btn-outline-info  " href="{{ url('exportpdf') }}">Eporta in PDF</a>
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
                @forelse ($student as $students)
                    @if ($loop->even)
                        <tr class="bg-info">
                        @else
                        <tr>
                    @endif
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}
                        </td>
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
                @empty
                    <tr>
                        <td colspan=6>Nessun risultato</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <?php $myVar = 6; ?>

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

        @for ($i = 1; $i <= 5; $i++)
            The current value is {{ $i }} <br>
        @endfor

        <hr>

        @foreach ($student as $students)
            @if ($loop->first)
                Questo è il primo {{ $students->id }}<br>
            @endif

            @if ($loop->last)
                Questo è l'ultimo {{ $students->id }}<br>
            @endif

            <p>This is student id: {{ $students->id }} questa è l'iterazione {{ $loop->iteration }} ne mancano
                {{ $loop->remaining }}</p>

            @if ($loop->remaining == 0)
                <p>creo pdf con ultimo file</p>
            @endif

            Totale {{ $loop->iteration }}
        @endforeach

        <hr>
        <?php $user = [];
        $x = 1;
        ?>

        <p>uno</p>
        @isset($user)
            @foreach ($user as $users)
                <p>This is student id: {{ $users->id }}</p>
            @endforeach
        @endisset


        <p>Due</p>
        @forelse ($user as $users)
            <li>{{ $users->name }}</li>
        @empty
            <p>No students</p>
        @endforelse

        @while ($x <= 4)
            <p>La variabile vale {{ $x }}</p>
            <?php $x++; ?>
        @endwhile


        @php
            $isActive = true;
            $hasError = false;
        @endphp

        <span @class([
            'p-4',
            'font-bold' => $isActive,
            'btn btn-danger' => $hasError,
            'text-gray-500' => !$isActive,
            'bg-red' => $hasError,
        ])>ATTENZIONE</span>

        <span @style(['background-color: yellow', 'font-weight: bold' => $isActive])>Grassetto</span>

        <button type="submit" @disabled($isActive)>Submit</button>

        <x-sidebar>
            <h2>Prova</h2>
        </x-sidebar>
        <input type="email"
        name="email"
        value="email@laravel.com"
        @readonly($isActive) />


        @include('sottovista', ['status' => 'completo'])

        @includeWhen($isActive, 'sottovista', ['status' => 'attivo'])
      


        <x-sidebar>
            <h3>Titolo</h3>
            <ul>
                <li>Home</li>
                <li>Articles</li>
                <li>About</li>
            </ul>
        </x-sidebar>

        <hr>

        @inject('bus', 'App\Services\SchoolbusService')
 
<div>
    Bus timetable {{ $bus->timetable() }}.
    Bus autisti {{ $bus->drivers() }}.
</div>

    </div>
@endsection
