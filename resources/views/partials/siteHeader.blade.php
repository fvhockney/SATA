<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>@yield('title')</title>
  <meta name="description" content=@yield('description')>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
