<nav class="bg-white shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-xl font-semibold text-blue-600">
            Accessible Auctions
        </a>

        <ul class="hidden md:flex gap-6 text-gray-700 font-medium">
            <li><a href="{{ url('/') }}" class="hover:text-blue-600">Home</a></li>
            <li><a href="{{ url('/auctions') }}" class="hover:text-blue-600">Auctions</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-blue-600">About</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a></li>
        </ul>

        <div class="flex gap-3 items-center">
            @auth
                <span class="text-sm text-gray-600 mr-3">Hello, {{ auth()->user()->name }}</span>
                <a href="{{ url('/purchases') }}" class="text-gray-700 hover:text-blue-600">Purchases</a>
                <a href="{{ url('/account') }}" class="text-gray-700 hover:text-blue-600">Account</a>

                <form method="POST" action="{{ url('/logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-white border border-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-gray-50">Logout</button>
                </form>
            @else
                <a href="{{ url('/login') }}" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                <a href="{{ url('/register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition">
                    Register
                </a>
            @endauth
        </div>
    </div>
</nav>
