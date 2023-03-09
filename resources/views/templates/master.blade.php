<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} || Tugas MVC</title>
        <link rel="shortcut icon" href="{{ asset('logomark.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
              theme: {
                container: {
                    center: true,
                    padding: '16px',
                },
                extend: {
                    screens: {
                        '2xl': '1320px',
                    },
                    scale: {
                        '-100': '-1',
                    }
                }
              }
            }
          </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        @include('templates.partials.nav')

        @yield('content')

        @include('templates.partials.footer')
        
        <!-- Back to Top -->
        <a id="back-to-top" onclick="toTop()" class="fixed z-[9999] bottom-6 right-6 cursor-pointer hidden items-center justify-center w-14 h-14 bg-primary rounded-full p-4 hover:animate-pulse">
            <span class="block w-5 h-5 border-t-4 border-l-4 rotate-45 mt-2"></span>
        </a>

        @include('templates.partials.scripts')
    </body>
</html>
