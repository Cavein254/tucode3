<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <title>TUcode</title>
        <link href="{{asset('css/app.css')}}"
    </head>
    <body class="antialiased">
        <div id="root"></div>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
