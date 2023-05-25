<h2>Inserisci nuovo rating</h2>

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
        Inserisci rating
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('storerating') }}">
            @csrf
            <div class="form-group">
                <label for="user_id">Scegli utente</label>
                <select type="user_id" class="form-control" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Scegli libro</label>
                <select type="book_id" class="form-control" name="book_id">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="rating">Voto</label>
                <select type="rating" class="form-control" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <button type="submit" class="btn btn-block btn-danger">Inserisci rating</button>
        </form>
    </div>
</div>
