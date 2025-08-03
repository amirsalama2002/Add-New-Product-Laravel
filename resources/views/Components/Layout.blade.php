<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amir 2026</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    
   <!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2 text-white font-bold text-xl">
                <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0zm0 18c-4.4 0-8-3.6-8-8s3.6-8 
                             8-8 8 3.6 8 8-3.6 8-8 8z"/>
                </svg>
                <span>Falcon</span>
            </a>

            <!-- Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="hover:text-yellow-300 transition">Home</a>
                <a href="/about" class="hover:text-yellow-300 transition">About</a>
                <a href="/server" class="hover:text-yellow-300 transition">Server</a>
                <a href="/contact" class="hover:text-yellow-300 transition">Contact</a>
                <a href="/login" class="bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition">
                    Login
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-indigo-700 text-white px-4 py-3 space-y-2">
        <a href="/" class="block hover:text-yellow-300 transition">Home</a>
        <a href="/About" class="block hover:text-yellow-300 transition">About</a>
        <a href="/Server" class="block hover:text-yellow-300 transition">Server</a>
        <a href="/contact" class="block hover:text-yellow-300 transition">Contact</a>
        <a href="/login" class="block bg-white text-indigo-600 text-center px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition">
            Login
        </a>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</nav>

<!-- لتفادي تغطية الصفحة -->
<div class="h-5"></div>


<!-- Spacer -->
<div class="h-16"></div>

    


  
    {{ $slot }}
</body>
</html>