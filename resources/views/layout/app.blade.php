<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de produtos</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
     <main>
        @hasSection('body')
           @yield('body')
        @endif

     </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>