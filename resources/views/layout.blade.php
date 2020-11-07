<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="text-center">
    <div class="cover-container w-100 h-100 p-3 mx-auto">
        <header class="masthead">
            <div class="inner">
                <h3 class="masthead-brand">Storage</h3>
                <nav class="nav nav-masthead justify-content-center">
                    @foreach(['/' => 'Upload', 'files' => 'Files'] as $link => $page)
                        <a class="nav-link{{ request()->is($link) ? ' active' : '' }}" href="{{ $link }}">{{ $page }}</a>
                    @endforeach

                    @if($auth)
                        <a href="/logout" class="nav-link nav-link_logout">Logout</a>
                    @endif
                </nav>
            </div>
        </header>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
