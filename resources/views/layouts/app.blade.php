<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    --}}

    {{-- <link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css"> --}}
</head>

<body>
    @include('layouts._navbar')


    <div class="container-box pt-2 px-4">
        <div class="row">
            @include('layouts._top-section')
        </div>

        @if (session()->has(['error', 'success', 'info']))
        <div class="row p-0">
            @if (session('error'))
                <div class="col-12 mb-3">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="col-12 mb-3">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if (session('info'))
                <div class="col-12 mb-3">
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                </div>
            @endif
        </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
