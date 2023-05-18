<h1>Inserisci nuovo volo</h1>

<form method="post" action="{{ route('flights.store') }}">
    <div class="form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name"  value={{old('name')}} >
    </div>
    <div class="form-group">
        <label for="email">Destination</label>
        <input type="text" class="form-control" name="destination"  value={{old('destination')}} >
    </div>
    <div class="form-group">
        <label for="phone">Company</label>
        <input type="text" class="form-control" name="company" value={{old('company')}} >
    </div>

    <div class="form-group">
        <label for="phone">Number</label>
        <input type="number" class="form-control" name="number" value={{old('number')}} >
    </div>

    <button type="submit" class="btn btn-block btn-danger">Create Flight</button>
</form>