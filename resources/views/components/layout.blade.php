<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Component</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <!-- Render the slot content passed to the component -->
    @session('message')
        <div class = "success-message"> 
            {{session('message')}}
        </div>
    @endsession
    {{ $slot }}
</body>
</html>
