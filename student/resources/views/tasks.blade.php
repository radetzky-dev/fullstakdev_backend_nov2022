<x-layout>

    <x-slot:title>
        Cosa da fare
    </x-slot>
<?php

$tasks = ['uno','due','tre'];

?>
    @foreach ($tasks as $task)
        {{ $task }} <br>
    @endforeach
</x-layout>