<html>
    <head>
        <title>
            Paginda de inicio
        </title>
    </head>
    <body>
        <form method="POST" action="resultado">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input value="Dividendo" name="dividendo" id="dividendo"><br>
            <input value="Divisor" name="divisor" id="divisor"><br>
            <input value="Enviar" name="Enviar" type="submit"/>
        </form>
    </body>
</html>