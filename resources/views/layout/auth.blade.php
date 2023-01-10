<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="" type="image" sizes="16x16"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <script src="/js/app.js" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/assets/libs/@fortawesome/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/site.css">
    <link rel="stylesheet" href="/assets/css/ac.css">
    <link rel="stylesheet" href="/assets/css/stylesheet.css">
</head>
<body>
@yield('content')

<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
</body>
</html>



