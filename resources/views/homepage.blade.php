<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primo esercizio Laravel</title>

    </head>
    
    <body>
        <h1>{{ $welcome }}</h1> 

        <ul>
            @foreach ($menu as $key => $item ) 
                <li>{{ $key }}</li>            
            @endforeach   
        </ul>

    </body>
</html>