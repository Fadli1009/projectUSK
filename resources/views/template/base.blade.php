<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')

</head>

<body>
    <div class="wrapper">
        @include('partials.sidebar')

        <div class="main">
            @include('partials.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    @yield('content')

                </div>
            </main>
            @include('partials.footer')

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
