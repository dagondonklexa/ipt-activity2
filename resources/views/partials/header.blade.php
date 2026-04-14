
<header class="bg-white/40 border-b shadow-lg sticky top-0 left-0 w-full border-none backdrop-blur-lg">
    <div class="container mx-auto h-16 flex items-center justify-between px-40">


        <a href="{{ url('/') }}" class="font-extrabold text-xl">
            Product Management
        </a>

        
        <nav class="hidden md:flex gap-6 text-gray-700 font-bold">
            <a href="{{ route('products.index') }}" class="hover:text-black hover:underline hover:scale-110 transition-all duration-500">
                Products
            </a>
            <a href="{{ route('categories.index') }}" class="hover:text-black hover:underline hover:scale-110 transition-all  duration-500">
                Categories
            </a>
        </nav>


        <button id="menuBtn" class="md:hidden text-2xl">
            ☰
        </button>
    </div>


    <div id="mobileMenu" class="hidden md:hidden border-t px-4 py-3 space-y-3">
        <a href="{{ route('products.index') }}" class="block">
            Products
        </a>
        <a href="{{ route('categories.index') }}" class="block">
            Categories
        </a>
    </div>
</header>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>