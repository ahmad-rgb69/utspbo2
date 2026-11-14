<!doctype html>
<html lang="id">
<head>
    @include('layouts.head')
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('layouts.nav')
        @include('layouts.sidebar')

        <main class="app-main">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    @include('layouts.scripts')
</body>
</html>