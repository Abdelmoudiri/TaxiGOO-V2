<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demandes de Réservation - PIPYalah</title>
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
    <!-- <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-yellow-500">PIPYalah</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="index.html" class="text-gray-600 hover:text-yellow-500">Accueil</a>
                    <a href="driver-requests.html" class="text-yellow-500">Demandes</a>
                    <a href="profile.html" class="text-gray-600 hover:text-yellow-500">Profil</a>
                    <a href="login.html" class="text-gray-600 hover:text-yellow-500">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav> -->
    <x-navigation>
        
    </x-navigation>

    <!-- Status Toggle -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Tableau de bord</h1>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-600">Status:</span>
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Disponible
                </button>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Courses aujourd'hui
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        5
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Revenus aujourd'hui
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        750 MAD
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Note moyenne
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">
                                        4.8/5
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requests List -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg font-medium text-gray-900">Demandes de réservation</h2>
            </div>
            <div class="border-t border-gray-200">
                <!-- Request 1 -->
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Passager">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Sarah Amrani</h3>
                                <p class="text-sm text-gray-500">Casablanca → Rabat</p>
                                <p class="text-sm text-gray-500">Aujourd'hui à 15:30 • 3 passagers</p>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                Refuser
                            </button>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                Accepter
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Request 2 -->
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Passager">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Mohammed Karimi</h3>
                                <p class="text-sm text-gray-500">Rabat → Kénitra</p>
                                <p class="text-sm text-gray-500">Demain à 09:00 • 2 passagers</p>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                Refuser
                            </button>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                Accepter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
