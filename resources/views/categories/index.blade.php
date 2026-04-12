@extends("layouts.app")

@section('title', 'My Site | Category Lists')

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Categories</title>
</head>
<body>
    <div class="max-w-4xl mx-auto py-10 sm:py-20 px-4">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">Categories</h2>
                <p class="text-gray-500 text-sm sm:text-base mt-1">Manage and organize your product classifications.</p>
            </div>
            <div>
                <a href="{{ route('categories.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm sm:text-base font-semibold rounded-lg shadow-sm transition-all active:scale-95">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Category
                </a>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @foreach($categories as $category)
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-5 hover:shadow-md transition-shadow">
                    <div class="flex items-center space-x-3 sm:space-x-4 mb-4">
                        <!-- Dynamic Color Swatch -->
                        <div 
                            class="w-8 sm:w-10 h-8 sm:h-10 rounded-full border border-gray-100 shadow-inner flex-shrink-0"
                            style="background-color: {{ $category->cat_color }};"
                        ></div>
                        
                        <div class="min-w-0 flex-1">
                            <h3 class="font-bold text-gray-800 text-sm sm:text-base truncate">
                                {{ $category->cat_name }}
                            </h3>
                            <code class="text-xs text-gray-400 font-mono uppercase block truncate">
                                {{ $category->cat_color }}
                            </code>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-2">
                        <a href="{{ route('categories.edit', $category->id) }}"
                           class="flex-1 px-2 sm:px-3 py-1.5 sm:py-2 bg-blue-500 text-white text-xs sm:text-sm font-semibold rounded hover:bg-blue-600 transition text-center">
                           Edit
                        </a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Delete this category?')" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="w-full px-2 sm:px-3 py-1.5 sm:py-2 bg-red-800 text-white text-xs sm:text-sm font-semibold rounded hover:bg-red-900 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <!-- Empty State (Optional) -->
            @if($categories->isEmpty())
                <div class="col-span-full py-8 sm:py-12 text-center bg-gray-100 rounded-xl border-2 border-dashed border-gray-300">
                    <p class="text-sm sm:text-base text-gray-500">No categories found. Start by adding one!</p>
                </div>
            @endif
        </div>

        <!-- Back Button -->
        <div class="mt-6 sm:mt-8">
            <a 
                href="{{ route('products.index') }}"
                class="inline-block text-sm sm:text-base text-gray-500 hover:text-gray-700 font-bold transition-colors border border-gray-200 px-4 py-2 rounded-lg"
            >
                Back
            </a>
        </div>
    </div>

</body>
</html>
@endsection