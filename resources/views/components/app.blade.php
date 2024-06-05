<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Jobs</title>
</head>
<body class="h-full flex flex-col">

    <x-navbar />

    <main class="pb-8 max-h-full overflow-y-scroll h-full flex-1">
        {{ $slot }}
    </main>

</body>
</html>
