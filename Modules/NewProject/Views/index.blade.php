<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module NewProject</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<h1>
    HELLO WORLD
    <br>
</h1>
<pre id="json">{{$data}}</pre>

<script>
    var app = @json($data);
    document.getElementById("json").innerHTML = app;
</script>
</body>
</html>
