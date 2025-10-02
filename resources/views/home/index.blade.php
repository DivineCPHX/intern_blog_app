<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSphere | Home</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="{{url('/styles/tailwind.js')}}"></script>
    <link href="{{ url('/styles/unpkg.css') }}" rel="stylesheet">
    <script src="{{ url('/styles/unpkg.js') }}"></script>
    <script src="{{ url('/styles/feather-icons.js') }}"></script>
    <script src="{{ url('/styles/unpkg-feather-icons.js') }}"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .transition-smooth {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex items-center">
                        <i data-feather="edit-3" class="text-indigo-600"></i>
                        <span class="ml-2 text-xl font-bold text-indigo-600">BlogSphere</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-indigo-600 font-medium">Home</a>
                    <a href="/about" class="text-gray-600 hover:text-indigo-600 transition-smooth">About</a>
                    <a href="/posts" class="text-gray-600 hover:text-indigo-600 transition-smooth">View all posts</a>
                    <a href="/posts/create" class="text-gray-600 hover:text-indigo-600 transition-smooth">Create Post</a>
                    <a href="/contact" class="text-gray-600 hover:text-indigo-600 transition-smooth">Contact</a>
                </div>
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-indigo-600">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-600 bg-indigo-50">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">About</a>
                <a href="/posts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">View all posts</a>
                <a href="/posts/create" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Create Post</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Share Your Thoughts With The World</h1>
                    <p class="text-xl mb-8 opacity-90">Join our community of passionate writers and readers. Discover, create, and connect.</p>
                    <div class="flex space-x-4">
                        <a href="/posts/create" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-smooth">Start Writing</a>
                        <a href="#featured" class="border-2 border-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:bg-opacity-10 transition-smooth">Explore</a>
                    </div>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <img src="http://static.photos/technology/1024x576/1" alt="Blogging illustration" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section id="featured" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Posts</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover the most engaging content from our community</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <div class="blog-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up">
                    <img src="http://static.photos/travel/640x360/1" alt="Travel blog" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>Travel</span>
                            <span class="mx-2">•</span>
                            <span>May 15, 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Exploring Hidden Gems in Southeast Asia</h3>
                        <p class="text-gray-600 mb-4">Discover the less-traveled paths and authentic experiences in this vibrant region.</p>
                        <a href="#" class="text-indigo-600 font-medium flex items-center">
                            Read More
                            <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="blog-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up" data-aos-delay="100">
                    <img src="http://static.photos/technology/640x360/2" alt="Tech blog" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>Technology</span>
                            <span class="mx-2">•</span>
                            <span>June 2, 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">The Future of AI in Everyday Life</h3>
                        <p class="text-gray-600 mb-4">How artificial intelligence is transforming our daily routines and what to expect next.</p>
                        <a href="#" class="text-indigo-600 font-medium flex items-center">
                            Read More
                            <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="blog-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up" data-aos-delay="200">
                    <img src="http://static.photos/food/640x360/3" alt="Food blog" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>Food</span>
                            <span class="mx-2">•</span>
                            <span>June 10, 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">5 Healthy Recipes for Busy Weeknights</h3>
                        <p class="text-gray-600 mb-4">Quick, nutritious meals that take less than 30 minutes to prepare.</p>
                        <a href="#" class="text-indigo-600 font-medium flex items-center">
                            Read More
                            <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/posts/index" class="inline-block border-2 border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-indigo-600 hover:text-white transition-smooth">
                    View All Posts
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-indigo-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="zoom-in">
                <i data-feather="mail" class="w-12 h-12 mx-auto text-indigo-600 mb-4"></i>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Stay Updated</h2>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">Subscribe to our newsletter to receive the latest posts and updates directly in your inbox.</p>

                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition-smooth">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <a href="/" class="flex items-center mb-6">
                        <i data-feather="edit-3" class="text-indigo-400"></i>
                        <span class="ml-2 text-xl font-bold text-indigo-400">BlogSphere</span>
                    </a>
                    <p class="text-gray-400">A platform for writers and readers to connect and share meaningful content.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-smooth">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-smooth">About</a></li>
                        <li><a href="posts" class="text-gray-400 hover:text-white transition-smooth">View all posts</a></li>
                        <li><a href="/posts/create" class="text-gray-400 hover:text-white transition-smooth">Create Post</a></li>
                        <li><a href="/contact/index" class="text-gray-400 hover:text-white transition-smooth">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-smooth">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-smooth">Travel</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-smooth">Food</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-smooth">Lifestyle</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-smooth">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-smooth">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-smooth">
                            <i data-feather="instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-smooth">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                    <p class="text-gray-400">contact@blogsphere.com</p>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 BlogSphere. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        feather.replace();
    </script>
</body>
</html>
