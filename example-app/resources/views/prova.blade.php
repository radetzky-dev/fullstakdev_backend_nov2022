<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La mia prima app</title>
</head>

<body class="antialiased">
    <p>Pagina di prova</p>
    <form method="post" action="{{ url('prova') }}">
        @csrf
        <input type="text" name="name" id="name">
        <input type="submit" value="invia">
    </form>

    <hr>

    <h2>post normale</h2>
    <form method="post" action="{{ route('store') }}">
        @csrf
        <input type="text" name="name" id="name">
        <input type="submit" value="Invia">
    </form>


    <h2>Form con la put per showresult e update</h2>
    <?php $id=2;?>
    <form action="{{ url('showresult') }}/<?php echo $id;?>" method="POST">
        <input type="text" name="name" id="name">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="invia">
    </form>

    <h2>Form con la put per showresult</h2>
    <form action="{{ route('update', 1) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <input type="text" name="name" id="name">
        <button type="submit" class="btn btn-success">Submit</button>
    </form>



    <form action="{{ route('delete', 1) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>






</body>

</html>
