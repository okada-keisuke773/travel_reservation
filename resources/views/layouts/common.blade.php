<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="ytf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1">
        <title>@yield('title') - ホテル一覧</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    </head>
    <body>
        @include('partials.nav')
        <main>@yield('content')</main>
    </body>
</html>