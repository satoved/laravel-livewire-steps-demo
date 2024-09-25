<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire Steps Demo</title>

        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    </head>
    <body class="font-sans antialiased flex items-center justify-center min-h-[100vh] bg-gray-100 p-3">
        <livewire:email-subscription-wizard/>
    </body>
</html>
