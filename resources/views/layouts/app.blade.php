<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center" style="background: #edf2f7;">
    <div class="bg-blue-900">
        <div class="flex">

            <div class="w-2/5 text-white h-12 pl-32 py-4 h-auto">
                <!--left menu-->

                @include('partials._left-menu')

            </div>

            <div class="w-3/5 border border-gray-600 h-auto  border-t-0">
                <!--middle wall-->
             
               @yield('content')

            </div>


            <div class="w-2/5 h-12">
                <!--right menu-->

                @include('partials._right-menu')
            </div>

        </div>
    </div>
</body>
</html>
