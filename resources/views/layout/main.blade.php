<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    @vite('resources/js/app.js')   {{-- JS --}}
</head>
<body class="bg-slate-50">
    <div class="flex relative overflow-x-hidden min-h-screen">
        @include('layout.sidebar') {{-- Sidebar dipanggil di sini --}}

        <div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-72">
            @include('layout.header') {{-- Header dipanggil di sini --}}
            <main class="flex-1 p-8">
                @yield('content') {{-- Isi konten halaman --}}
            </main>
        </div>
    </div>
</body>
</html>
