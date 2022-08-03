<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <link rel="icon" type="image/png" href="../static/images/favicon_io/favicon.ico">
    <link rel="stylesheet" href="{{ url('static/css/connect.css?v='.time()) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="../static/fontawesome/css/all.css" rel="stylesheet" />
    <script defer src="../static/fontawesome/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    @section('content')
    @show
</body>
</html>
