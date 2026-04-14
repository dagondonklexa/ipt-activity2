
<header class="bg-slate-900 border-b border-slate-800 sticky top-0 left-0 w-full z-50 shadow-2xl shadow-slate-950/30">
    <div class="container mx-auto flex h-16 items-center justify-between px-6 md:px-8">
        <a href="{{ url('/') }}" class="text-lg font-extrabold text-white tracking-tight">
            Product Management
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-300">
            <a href="{{ route('products.index') }}" class="hover:text-white hover:underline transition-colors duration-200">
                Products
            </a>
            <a href="{{ route('categories.index') }}" class="hover:text-white hover:underline transition-colors duration-200">
                Categories
            </a>
        </nav>

        <button id="menuBtn" class="md:hidden text-2xl text-slate-300 hover:text-white transition-colors duration-200">
            ☰
        </button>
    </div>

    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-800 bg-slate-950 px-4 py-3 space-y-3">
        <a href="{{ route('products.index') }}" class="block rounded-2xl px-4 py-2 text-slate-200 hover:bg-slate-900 hover:text-white transition-colors duration-200">
            Products
        </a>
        <a href="{{ route('categories.index') }}" class="block rounded-2xl px-4 py-2 text-slate-200 hover:bg-slate-900 hover:text-white transition-colors duration-200">
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