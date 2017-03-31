<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/timeline.css')}}">

    {{-- Meta --}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="UTF-8">
    @yield('stylesheets')
    <title>@yield('title')</title>
</head>
<body>     
        @if(Auth::check())
        @include('partials._navbar') 
        @endif 
        @yield('body')
        <script src="{{asset('js/app.js')}}"></script>
        @yield('script')
</body>
</html>