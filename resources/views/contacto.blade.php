<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="contacto" method="POST">

    <h3>{{ $tipo }}</h3>

        @csrf 
        <label for="correo">Correiño</label><br>
        <input 
        type="email" 
        name="correo"
        @if ($tipo == 'alumno')
            value="@alumno.com"
        @else 
            value="@simio.com"
        @endif
        ><br>
        <label name="comentario">Comenta</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="30"></textarea><br>
        @error('comentario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Enviar">
    </form>
</body>
</html>