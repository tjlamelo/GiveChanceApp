<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give a Chance - Bienvenue</title>
   @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
        }
        .animate-bounce-slow {
            animation: bounce-slow 3s infinite;
        }
        @keyframes bounce-slow {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-indigo-600">Give a Chance</span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Accueil</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Blog</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Nos Actions</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Contact</a>
            </nav>
            <button class="md:hidden text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20 md:py-32">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight animate-pulse">Bienvenue sur Give a Chance</h1>
                <p class="text-xl mb-8 opacity-90">
                    Une plateforme de blog dédiée à partager nos actions, inspirations et réussites pour construire un avenir meilleur.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                        Découvrir le blog
                    </button>
                    <button class="border-2 border-white hover:bg-white hover:bg-opacity-10 px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                        Nos missions
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative w-64 h-64 md:w-80 md:h-80 bg-white bg-opacity-20 rounded-full flex items-center justify-center animate-bounce-slow">
                    <div class="w-56 h-56 md:w-72 md:h-72 bg-white bg-opacity-30 rounded-full flex items-center justify-center">
                        <div class="w-48 h-48 md:w-64 md:h-64 bg-white bg-opacity-40 rounded-full flex items-center justify-center">
                            <i class="fas fa-hands-helping text-6xl md:text-7xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-gray-800">Notre Engagement</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
                Give a Chance est plus qu'un blog, c'est une communauté engagée pour faire la différence.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card-hover bg-gray-50 rounded-xl p-8 transition duration-300 shadow-sm">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-heart text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 text-gray-800">Solidarité</h3>
                    <p class="text-gray-600 text-center">
                        Nous croyons en la puissance de la solidarité pour transformer des vies et créer des opportunités.
                    </p>
                </div>
                
                <div class="card-hover bg-gray-50 rounded-xl p-8 transition duration-300 shadow-sm">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-book-open text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 text-gray-800">Partage</h3>
                    <p class="text-gray-600 text-center">
                        Notre blog est un espace pour partager des histoires inspirantes et des connaissances utiles.
                    </p>
                </div>
                
                <div class="card-hover bg-gray-50 rounded-xl p-8 transition duration-300 shadow-sm">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-hand-holding-heart text-pink-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 text-gray-800">Impact</h3>
                    <p class="text-gray-600 text-center">
                        Chaque action, aussi petite soit-elle, peut avoir un impact significatif sur la vie des autres.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-gray-800">Derniers Articles</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
                Découvrez nos dernières publications et inspirez-vous de nos actions.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                    <div class="h-48 bg-indigo-200 flex items-center justify-center">
                        <i class="fas fa-image text-white text-5xl opacity-30"></i>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-indigo-600 font-semibold mb-2">Éducation</div>
                        <h3 class="text-lg font-bold mb-3">Ouverture d'une nouvelle école</h3>
                        <p class="text-gray-600 mb-4">Comment nous avons permis à 200 enfants d'accéder à l'éducation dans la région de...</p>
                        <a href="#" class="text-indigo-600 font-medium flex items-center">
                            Lire plus <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                    <div class="h-48 bg-purple-200 flex items-center justify-center">
                        <i class="fas fa-image text-white text-5xl opacity-30"></i>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-purple-600 font-semibold mb-2">Santé</div>
                        <h3 class="text-lg font-bold mb-3">Mission médicale 2023</h3>
                        <p class="text-gray-600 mb-4">Retour sur notre mission médicale qui a permis de soigner plus de 500 patients dans...</p>
                        <a href="#" class="text-purple-600 font-medium flex items-center">
                            Lire plus <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-md card-hover">
                    <div class="h-48 bg-pink-200 flex items-center justify-center">
                        <i class="fas fa-image text-white text-5xl opacity-30"></i>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-pink-600 font-semibold mb-2">Témoignage</div>
                        <h3 class="text-lg font-bold mb-3">L'histoire de Mariam</h3>
                        <p class="text-gray-600 mb-4">Comment la formation en couture a changé la vie de Mariam et de sa famille...</p>
                        <a href="#" class="text-pink-600 font-medium flex items-center">
                            Lire plus <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                    Voir tous les articles
                </button>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-indigo-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à nous rejoindre ?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Chaque contribution compte. Ensemble, donnons une chance à ceux qui en ont besoin.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                    Faire un don
                </button>
                <button class="border-2 border-white hover:bg-white hover:bg-opacity-10 px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                    Devenir bénévole
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Give a Chance</h3>
                    <p class="text-gray-400">
                        Une ONG engagée pour créer des opportunités et construire un avenir meilleur.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Nos Actions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ressources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Rapports annuels</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Publications</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-indigo-400"></i> 123 Rue de l'Espoir, Paris
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-indigo-400"></i> +33 1 23 45 67 89
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-indigo-400"></i> contact@giveachance.org
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Give a Chance. Tous droits réservés.</p>
                <p class="mt-2">Fait avec <i class="fas fa-heart text-red-400"></i> pour un monde meilleur</p>
            </div>
        </div>
    </footer>

    <script>
        // Animation du texte de bienvenue
        document.addEventListener('DOMContentLoaded', function() {
            const welcomeText = document.querySelector('h1');
            
            // Animation au chargement
            setTimeout(() => {
                welcomeText.classList.remove('animate-pulse');
                welcomeText.classList.add('animate-bounce');
                
                setTimeout(() => {
                    welcomeText.classList.remove('animate-bounce');
                }, 1000);
            }, 2000);
            
            // Effet au survol
            welcomeText.addEventListener('mouseover', function() {
                this.classList.add('animate-pulse');
            });
            
            welcomeText.addEventListener('mouseout', function() {
                this.classList.remove('animate-pulse');
            });
        });
    </script>
</body>
</html>