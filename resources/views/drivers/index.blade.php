<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chauffeurs Disponibles - PIPYalah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <x-navigation>
        
    </x-navigation>

    <!-- Drivers Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Chauffeurs Disponibles</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($drivers as $driver)
            <!-- Driver Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img class="w-48 h-48 mx-auto object-fit" src="{{ asset('storage/'.$driver->photo)}}" alt="Chauffeur">
                    <div class="absolute top-4 right-4">
                        <span class="text-black px-3 py-1 rounded-full text-sm">{{ $driver->status }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900">{{ $driver->firstname .' '.$driver->lastname}}</h3>
                    <div class="mt-2 flex items-center text-gray-600">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $driver->city}}
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex items-center">
                            <svg class="text-yellow-500 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="ml-2 text-gray-600">4.8 (156 avis)</span>
                        </div>
                    </div>
                    <button class="mt-6 w-full bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600 transition">
                        Réserver maintenant
                    </button>
                </div>
            </div>
        @endforeach
        </div>
        
    </div>
</body>
</html>
