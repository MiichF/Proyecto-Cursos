<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Proyecto1 pagina estatica</title>
   </head>

<header>
        <h1 id="title">Contacto</h1>
    </header>

    <form id="survey-form" action="/contacto-recibe-form" method="POST">
        @csrf
        <label id="name-label" for="name">Nombre</label><br>
        <input id="name" type="text"  name="nombre" value = {{$nombre}}><br>

        <label id="email-label" for="email">Correo</label><br>
        <input id="email" type="text" name="correo" value= {{$correo}}><br>
        

        <p>Mensaje</p><br>
        <textarea id="suggestions" name="mensaje" placeholder="Escribe tu mensaje"></textarea>
        
        <input id="submit" type="submit" value="Submit">

        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    <br>
                @endforeach
            </ul>
        </div>
        @endif
    </form>

</body>
</html>