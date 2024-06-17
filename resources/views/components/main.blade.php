<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD livewire 18</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <x-navbar />
    <div class="container mt-5">
        <main>
            {{$slot}}
        </main>
    </div>
    
</body>
</html>