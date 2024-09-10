<!-- resources/views/principal.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Script</title>
    @livewireStyles
</head>
<body>
    <div class="container">
        <h1>Run Script in Real-Time</h1>
        @livewire('run-script') <!-- Este es el componente Livewire -->
    </div>

    @livewireScripts
</body>
</html>
