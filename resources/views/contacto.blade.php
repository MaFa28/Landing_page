<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
    </head>

    <body>

    <form action="/recibe-form-contacto" method="POST">

        @csrf

        <label for="nombre">Nombre: </label>
        <input type="text" name="Nombre" id="nombre" value="{{ old('Nombre') }}">
        @error('Nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="correo"">Correo: </label>
        <input type="email" name="correo" id="mail" value="{{ old('correo') }}"">
        @error('correo')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="comentario"">Comentario: </label><br>
        <textarea name="comentario"  rows="6" cols="0" value="{{ old('comentario') }}"></textarea>
        @error('comentario')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <input type="submit" value="Enviar">

    </form>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>


            </div>

        @endif

    </body>
</html>
