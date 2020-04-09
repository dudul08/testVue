<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
<div id="app">
    <div class="container mt-5">
        <example-component></example-component>
    </div>




</div>
<script src="http://localhost:8098"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
