<html>
<head>
    <title>Brains - @yield('title')</title>
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-200">
<div class="flex h-full">
@include('components.sidebar')

<div class="w-full h-full overflow-scroll">
    <div class="flex justify-evenly h-12 bg-teal-600 w-1/2 ml-auto rounded-bl-lg text-teal-200 px-2">
        <span class="my-auto cursor-pointer hover:text-teal-100">Manager  <span class="my-auto mdi mdi-chevron-down"></span></span>
        <span class="my-auto cursor-pointer hover:text-teal-100 font-bold">Hiro Hamada  <span class="my-auto mdi mdi-chevron-down"></span></span>
        <span class="my-auto mdi cursor-pointer hover:text-teal-100 mdi-bell text-2xl"></span>
        <span class="my-auto mdi cursor-pointer hover:text-teal-100 mdi-settings text-2xl"></span>
    </div>

    <div class="px-4 mt-3">
        <div class="divider"></div>
        <div class="flex my-2">
            <span class="uppercase text-2xl text-gray-800">@yield('title')</span>
        </div>
        @yield('content')
    </div>


</div>
</div>
</body>
</html>
