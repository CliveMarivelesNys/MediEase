<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>

    @include('layouts.header')

    <div class=" mt-[4rem] flex  items-center justify-center text-center w-full py-4">
        @include('menu')
     </div>
     
    @yield('content')


  
    @include('layouts.footer')
</body>

</html>