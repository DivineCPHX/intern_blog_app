<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSphere | Contact Us</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="{{url('/styles/tailwind.js')}}"></script>
    <link href="{{ url('/styles/unpkg.css') }}" rel="stylesheet">
    <script src="{{ url('/styles/unpkg.js') }}"></script>
    <script src="{{ url('/styles/feather-icons.js') }}"></script>
    <script src="{{ url('/styles/unpkg-feather-icons.js') }}"></script>
    <style>
        .contact-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .transition-smooth {
            transition: all 0.3s ease;
        }
        #map {
            height: 400px;
            width: 100%;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <i data-feather="edit-3" class="text-indigo-600"></i>
                        <span class="ml-2 text-xl font-bold text-indigo-600">BlogSphere</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-indigo-600 transition-smooth">Home</a>
                    <a href="/about" class="text-gray-600 hover:text-indigo-600 transition-smooth">About</a>
                    <a href="/posts" class="text-gray-600 hover:text-indigo-600 transition-smooth">View all posts</a>
                    <a href="/posts/create" class="text-gray-600 hover:text-indigo-600 transition-smooth">Create Post</a>
                    <a href="/contact" class="text-indigo-600 font-medium">Contact Us</a>
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
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">About</a>
                <a href="/posts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">View all posts</a>
                <a href="/posts/create" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Create Post</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-600 bg-indigo-50">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="contact-gradient text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Get In Touch</h1>
            <p class="text-xl max-w-3xl mx-auto opacity-90" data-aos="fade-up" data-aos-delay="100">We'd love to hear from you! Reach out with questions, feedback, or partnership opportunities.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Information</h2>
                    <p class="text-gray-600 mb-8">Our team is here to help with any questions you might have about BlogSphere. Whether you're a writer looking for guidance or a reader with feedback, we're just a message away.</p>

                    <div class="space-y-6">
                        <div class="contact-card bg-gray-50 p-6 rounded-lg transition-smooth">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <i data-feather="mail" class="text-indigo-600"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Email Us</h3>
                                    <p class="text-gray-600">contact@blogsphere.com</p>
                                    <p class="text-gray-600 mt-1">Typically responds within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-card bg-gray-50 p-6 rounded-lg transition-smooth">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <i data-feather="message-square" class="text-indigo-600"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Live Chat</h3>
                                    <p class="text-gray-600">Available Monday-Friday, 9am-5pm EST</p>
                                    <button class="mt-2 text-indigo-600 font-medium hover:text-indigo-700 transition-smooth">
                                        Start Chat
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="contact-card bg-gray-50 p-6 rounded-lg transition-smooth">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <i data-feather="map-pin" class="text-indigo-600"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Our Office</h3>
                                    <p class="text-gray-600">1234 Blog Street</p>
                                    <p class="text-gray-600">San Francisco, CA 94107</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your name">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your email">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="flex items-center">
                            <input id="newsletter" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="newsletter" class="ml-2 block text-sm text-gray-700">Subscribe to our newsletter</label>
                        </div>

                        <button type="submit" class="w-full px-6 py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-smooth">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center" data-aos="fade-up">Our Location</h2>
            <div id="map" data-aos="zoom-in"></div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center" data-aos="fade-up">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-smooth">
                        <span class="font-medium">How do I create an account on BlogSphere?</span>
                        <i data-feather="chevron-down" class="transform transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 border-t border-gray-200">
                        <p class="text-gray-600">Creating an account is simple! Click on the "Sign Up" button in the top right corner of any page. You can register using your email address or through your Google or Facebook account.</p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-smooth">
                        <span class="font-medium">Is BlogSphere free to use?</span>
                        <i data-feather="chevron-down" class="transform transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 border-t border-gray-200">
                        <p class="text-gray-600">Yes, BlogSphere is completely free for both readers and writers. We may introduce premium features in the future, but the core functionality will always remain free.</p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-smooth">
                        <span class="font-medium">How can I monetize my blog on BlogSphere?</span>
                        <i data-feather="chevron-down" class="transform transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 border-t border-gray-200">
                        <p class="text-gray-600">We currently offer a Partner Program for top writers. Once you've published several high-quality posts and built an audience, you can apply to join the program and earn revenue through ads and sponsorships.</p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-smooth">
                        <span class="font-medium">What types of content are not allowed on BlogSphere?</span>
                        <i data-feather="chevron-down" class="transform transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 border-t border-gray-200">
                        <p class="text-gray-600">We prohibit hate speech, harassment, illegal content, spam, and plagiarism. Please review our <a href="#" class="text-indigo-600 hover:underline">Community Guidelines</a> for complete details on our content policies.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-indigo-600 hover:text-white transition-smooth">
                    View All FAQs
                </a>
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

        // FAQ toggle
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Initialize Google Map (placeholder)
        function initMap() {
            // This is just a placeholder - in a real implementation you would use the Google Maps API
            const mapElement = document.getElementById('map');
            mapElement.innerHTML = '<div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500">Map would be displayed here with Google Maps API</div>';
        }

        // Initialize map when page loads
        window.onload = initMap;

        feather.replace();
    </script>
</body>
</html>
