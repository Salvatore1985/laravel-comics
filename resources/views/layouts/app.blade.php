<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel comics - @yield('title','home')</title>
    @yield('head-scripts')
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>

<body>
    {{-- HEADER --}}
   @include('partials.header')
    {{-- MAIN --}}
    <main>
      <div class="main-container">
        <div class="JumbotronMain"></div>
        
        @yield('main-content')
          </div>
        
    </main>
    {{-- FOOTER --}}
    @include('partials.footer')  
</body>
</html>