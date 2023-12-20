<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Quiz App</title>
    <!-- Bootstrap CSS -->
    @stack('styles')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS and additional scripts -->
    @stack('scripts')
</body>

</html>
