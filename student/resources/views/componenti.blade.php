<h3>Componenti</h3>

<hr>
<?php $user = [];
$x = 1;

$title ="Mario";
?>

<p>uno</p>
@isset($user)
    @foreach ($user as $users)
        <p>This is student id: {{ $users->id }}</p>
    @endforeach
@endisset

<p>Qui sotto sidebar</p>
<x-sidebar>
    <p>Questa parte viene passata dalla pagina</p>
    <hr>
</x-sidebar>

<p>Altro sidebar</p>
<x-sidebar>
    <h2>Questo è un testo diverso</h2>
</x-sidebar>

<p>Componente Alert</p>

<x-Alert message="questo è il messaggio" opzione="true"/>

<x-Alert message="questo non è un msg" opzione="false"/>