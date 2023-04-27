<html>

<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>

<body>
    <nav>
        <p>questo è HEADER - menu</p>
    </nav>
    <h1>Todos</h1>
    <hr />
    {{ $slot }}
    <hr />
    <nav>
        <p>questo è il footer</p>
    </nav>
</body>

</html>
