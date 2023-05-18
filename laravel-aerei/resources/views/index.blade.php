<h1>Lista aerei</h1>

@foreach ($flights as $flight)
Volo  {{ $flight->name }} company {{ $flight->company }} {{ $flight->destination }} {{ $flight->number }}<br>
@endforeach