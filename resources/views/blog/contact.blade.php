<x-app>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Sign Up Today!</h1>

            <p class="mt-4 text-gray-500">
            Fill out your details below and hit the subscribe button to keep up to date with the 'Junior Developer' blog.
            </p>
        </div>

        <form action="{{ route('contact.subscribe') }}" method="POST" class="max-w-xl mx-auto mt-8 mb-0 space-y-4">
            @csrf 
            <div>
                <label for="firstname" class="sr-only">First Name</label>
    
                <div class="relative">
                    <input
                    type="text"
                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                    placeholder="First Name"
                    name="first_name"
                    required="required"
                    />
                </div>
            </div>
            <div>
                <label for="lastname" class="sr-only">Last Name</label>
    
                <div class="relative">
                    <input
                    type="text"
                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                    placeholder="Last Name"
                    name="last_name"
                    required="required"
                    />
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
    
                <div class="relative">
                    <input
                    type="email"
                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                    placeholder="Email"
                    name="email"
                    required="required"
                    />
    
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                    </svg>
                    </span>
                </div>
            </div>
    
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">
                New here? Why not read one of my
                <a class="underline text-blue-500" href="{{ route('posts.blog')}}">Blog</a>
                posts
                </p>
                <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-200 text-white hover:text-blue-500 inline-block px-5 py-3 ml-3 text-sm font-medium rounded-lg">
                Subscribe
                </button>
            </div>
        </form>
    </div>
</x-app>