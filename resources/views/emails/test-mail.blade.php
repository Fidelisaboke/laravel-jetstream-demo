<!DOCTYPE html>
<html>
<head>
    <title>Laravel Mail</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    <h1 class="text-xl">{{ $data['title'] }}</h1>
    <p class="text-base">{{ $data['message'] }}</p>
    <p class="mt-4">Thank you!</p>
</body>
</html>
