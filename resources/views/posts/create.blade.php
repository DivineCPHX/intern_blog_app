{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Fill in the following details</h3>
    <form action="{{ route('posts.store') }}" method="POST">
    @csrf
        <div>
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="content" placeholder="Content">
            <button type="submit">Submit</button>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
            @error('content')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSphere | Create Post</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="{{url('/styles/tailwind.js')}}"></script>
    <link href="{{ url('/styles/unpkg.css') }}" rel="stylesheet">
    <script src="{{ url('/styles/unpkg.js') }}"></script>
    <script src="{{ url('/styles/feather-icons.js') }}"></script>
    <script src="{{ url('/styles/unpkg-feather-icons.js') }}"></script>
    <style>
        .create-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .transition-smooth {
            transition: all 0.3s ease;
        }
        .editor-toolbar {
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem 0.375rem 0 0;
            background-color: #f8fafc;
        }
        .editor-content {
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 0.375rem 0.375rem;
            min-height: 300px;
            padding: 1rem;
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
                    <a href="/create" class="text-indigo-600 font-medium">Create Post</a>
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
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">About</a>
                <a href="/posts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">View all posts</a>
                <a href="/posts/create" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-600 bg-indigo-50">Create Post</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="create-gradient text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Create Your Post</h1>
            <p class="text-xl max-w-3xl mx-auto opacity-90" data-aos="fade-up" data-aos-delay="100">Share your thoughts, stories, and expertise with our community</p>
        </div>
    </section>

    <!-- Create Post Form -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800">New Blog Post</h2>
                </div>

                <form class="p-6">
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Post Title</label>
                        <input type="text" id="title" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your post title">
                    </div>

                    <div class="mb-6">
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select id="category" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">Select a category</option>
                            <option value="technology">Technology</option>
                            <option value="travel">Travel</option>
                            <option value="food">Food</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="health">Health & Wellness</option>
                            <option value="business">Business</option>
                            <option value="education">Education</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="featured-image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i data-feather="upload" class="w-8 h-8 text-gray-500 mb-2"></i>
                                    <p class="text-sm text-gray-500">Click to upload or drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF (MAX. 5MB)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                        <div class="editor-toolbar p-2 flex flex-wrap gap-2">
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="bold"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="italic"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="underline"></i>
                            </button>
                            <div class="border-l border-gray-300 h-6 mx-2"></div>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="list"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="align-left"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="align-center"></i>
                            </button>
                            <div class="border-l border-gray-300 h-6 mx-2"></div>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="link"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="image"></i>
                            </button>
                            <button type="button" class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">
                                <i data-feather="code"></i>
                            </button>
                        </div>
                        <div class="editor-content" contenteditable="true">
                            <p>Start writing your post here...</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                        <input type="text" id="tags" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Add tags separated by commas (e.g., travel, adventure, tips)">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="publish" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="publish" class="ml-2 block text-sm text-gray-700">Publish immediately</label>
                        </div>

                        <div class="flex space-x-4">
                            <button type="button" class="px-6 py-3 border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-50 transition-smooth">
                                Save Draft
                            </button>
                            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-smooth">
                                Publish Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-8" data-aos="fade-up">Writing Tips</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-indigo-50 p-6 rounded-lg" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <i data-feather="edit-2" class="text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-medium">Craft a Compelling Title</h3>
                    </div>
                    <p class="text-gray-600">Your title is the first thing readers see. Make it clear, intriguing, and relevant to your content.</p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <i data-feather="image" class="text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-medium">Use Quality Images</h3>
                    </div>
                    <p class="text-gray-600">Visuals can make your post more engaging. Choose high-quality, relevant images that complement your content.</p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <i data-feather="list" class="text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-medium">Structure Your Content</h3>
                    </div>
                    <p class="text-gray-600">Break up long paragraphs with subheadings, bullet points, and images to improve readability.</p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <i data-feather="hash" class="text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-medium">Add Relevant Tags</h3>
                    </div>
                    <p class="text-gray-600">Tags help readers discover your content. Choose 3-5 relevant tags that accurately describe your post.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <a href="index.html" class="flex items-center mb-6">
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
