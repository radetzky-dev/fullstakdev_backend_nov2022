<h2>Mostra tutto</h2>

@php
         foreach ($users as $user) {
            $books = $user->books;
            foreach ($books as $book) {
                $ratings = $book->ratings;
                foreach ($ratings as $rate) {
                    echo($user->name .' - '.$book->title .'  voto:'. $rate->rating.'<br>');
                }
            }
        }
@endphp