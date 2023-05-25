<h2>Inserisci nuovo libro</h2>



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
        Inserisci libro
    </div>




    <div class="card-body">
        <form method="post" action="{{ route('store') }}">
            <div class="form-group">
                @csrf
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" value={{ old('title') }}>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="description" class="form-control" name="description" value={{ old('description') }}>
            </div>
            <div class="form-group">
                <label for="user_id">Scegli utente</label>
                <select type="user_id" class="form-control" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id}}">{{ $user->name }}</option>
                    @endforeach
                </select>

            </div>


            <button type="submit" class="btn btn-block btn-danger">Inserisci libro</button>
        </form>
    </div>
</div>
