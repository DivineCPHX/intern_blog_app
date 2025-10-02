<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSphere | About Us</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="{{url('/styles/tailwind.js')}}"></script>
    <link href="{{ url('/styles/unpkg.css') }}" rel="stylesheet">
    <script src="{{ url('/styles/unpkg.js') }}"></script>
    <script src="{{ url('/styles/feather-icons.js') }}"></script>
    <script src="{{ url('/styles/unpkg-feather-icons.js') }}"></script>
    <style>
        .about-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .team-card:hover {
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
                    <a href="/" class="text-gray-600 hover:text-indigo-600 transition-smooth">Home</a>
                    <a href="/about" class="text-indigo-600 font-medium">About</a>
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
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-600 bg-indigo-50">About</a>
                <a href="/posts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">View all posts</a>
                <a href="/posts/create" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Create Post</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="about-gradient text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Our Story</h1>
            <p class="text-xl max-w-3xl mx-auto opacity-90" data-aos="fade-up" data-aos-delay="100">Discover the passion and purpose behind BlogSphere</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center gap-12">
                <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
                    <img src="http://static.photos/office/640x360/1" alt="Our office" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Who We Are</h2>
                    <p class="text-gray-600 mb-4">BlogSphere was founded in 2025 with a simple mission: to create a platform where writers and readers could connect over meaningful content. What started as a small project among friends has grown into a vibrant community of thousands.</p>
                    <p class="text-gray-600 mb-4">We believe everyone has a story worth sharing, and we're committed to providing the tools and platform to make that possible.</p>
                    <p class="text-gray-600">Our team is spread across the globe, united by our love for storytelling and technology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Mission & Values</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Guiding principles that drive everything we do</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i data-feather="edit-3" class="text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Empower Creators</h3>
                    <p class="text-gray-600">We provide writers with the tools and platform to share their voice with the world.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i data-feather="users" class="text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Foster Community</h3>
                    <p class="text-gray-600">We build connections between writers and readers who share similar passions.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i data-feather="award" class="text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Quality Content</h3>
                    <p class="text-gray-600">We prioritize meaningful, well-crafted content that informs and inspires.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Meet Our Team</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">The passionate people behind BlogSphere</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="team-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up">
                    <img src="http://static.photos/people/640x360/1" alt="Sarah Johnson" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold mb-1">Sarah Johnson</h3>
                        <p class="text-indigo-600 mb-3">Founder & CEO</p>
                        <p class="text-gray-600">Sarah started BlogSphere from her dorm room with a vision to democratize content creation.</p>
                    </div>
                </div>

                <div class="team-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up" data-aos-delay="100">
                    <img src="http://static.photos/people/640x360/2" alt="Michael Chen" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold mb-1">Michael Chen</h3>
                        <p class="text-indigo-600 mb-3">CTO</p>
                        <p class="text-gray-600">Michael leads our engineering team, ensuring the platform is fast, reliable, and user-friendly.</p>
                    </div>
                </div>

                <div class="team-card bg-white rounded-lg overflow-hidden shadow-md transition-smooth" data-aos="fade-up" data-aos-delay="200">
                    <img src="http://static.photos/people/640x360/3" alt="Emma Rodriguez" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold mb-1">Emma Rodriguez</h3>
                        <p class="text-indigo-600 mb-3">Editor-in-Chief</p>
                        <p class="text-gray-600">Emma oversees our content strategy and works closely with our community of writers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up">
                    <div class="text-4xl font-bold mb-2">10,000+</div>
                    <div class="text-indigo-200">Active Writers</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold mb-2">500K+</div>
                    <div class="text-indigo-200">Monthly Readers</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-indigo-200">Countries</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold mb-2">3</div>
                    <div class="text-indigo-200">Years</div>
                </div>
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
                        <li><a href="/posts" class="text-gray-400 hover:text-white transition-smooth">View all posts</a></li>
                        <li><a href="/posts/create" class="text-gray-400 hover:text-white transition-smooth">Create Post</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-smooth">Contact</a></li>
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
                <p>&copy; 2025 BlogSphere. All rights reserved.</p>
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
