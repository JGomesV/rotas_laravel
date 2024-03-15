<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Meu Site</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('principal') }}" class="hover:text-gray-300">Home</a></li>
                    <li><a href="{{ route('sobre-nos') }}"class="hover:text-gray-300">Sobre Nós</a></li>
                    <li><a href="{{ route('contato') }}" class="hover:text-gray-300">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>



</body>
</html>
