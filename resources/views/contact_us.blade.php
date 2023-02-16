<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>

    </head>
    
    <body>
        <h1>{{ $welcome }}</h1> 

        <ul>
            @foreach ($menu as $key => $item ) 
                <li><a href={{ $item }}>{{ $key }}</a></li>            
            @endforeach   
        </ul>

    </body>
</html>