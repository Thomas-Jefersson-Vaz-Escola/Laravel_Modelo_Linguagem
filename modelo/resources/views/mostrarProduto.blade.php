<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Produto</title>
</head>
<body>
    @if(session('success'))
    <span style="color: #082">
        {{ session('success') }}
    </span>
    @endif
</body>
</html>