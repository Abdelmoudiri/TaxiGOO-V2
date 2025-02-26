<nav class="bg-white shadow-lg sticky top-0 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-yellow-500">PIPYalah</div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-yellow-500">Accueil</a>
                    <a href="/drivers" class="text-gray-600 hover:text-yellow-500">Chauffeurs</a>
                    <a href="/profile" class="text-gray-600 hover:text-yellow-500">profil</a>
                    @auth
                    <a href="/logout" class="text-gray-600 hover:text-yellow-500">logout</a>
                    @endauth
                    @guest
                        <a href="/login" class="text-gray-600 hover:text-yellow-500">Connexion</a>
                        <a href="/register" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                            Inscription
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>