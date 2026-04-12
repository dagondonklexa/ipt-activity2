
@extends("layouts.app")

@section('title', 'My Site | Create Category')

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add Category</title>
</head>
<body>
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg border border-gray-100 p-8 flex flex-col justify-center items-center container mx-auto mt-20">
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Add Category</h2>
            <p class="text-gray-500 text-sm mt-1">Organize your products by creating a new category.</p>
        </div>

        <form method="POST" action="{{ route('categories.store') }}" class="space-y-6">
            <!-- CSRF Token (Laravel) -->
            @csrf 

            <!-- Category Name -->
            <div>
                <label for="cat_name" class="block text-sm font-semibold text-gray-700 mb-1">Category Name</label>
                <input 
                    type="text" 
                    name="cat_name" 
                    id="cat_name"
                    placeholder="e.g. Electronics" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all placeholder:text-gray-400"
                >
                @error('cat_name')
                    <p class="text-red-500 text-sm py-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category Color -->
            <div>
                <label for="cat_color" class="block text-sm font-semibold text-gray-700 mb-1">Category Color</label>
                <div class="flex gap-2">
                    <input 
                        type="text" 
                        name="cat_color" 
                        id="cat_color"
                        placeholder="e.g. #FF5733 or Blue" 
                        class="flex-1 px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all placeholder:text-gray-400"
                    >
                    <div class="w-12 h-auto rounded-lg border border-gray-300 bg-emerald-100 flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full bg-emerald-500"></div>
                    </div>
                </div>
                <p class="text-xs text-gray-400 mt-2">Used for labels</p>
                @error('cat_color')
                    <p class="text-red-500 text-sm py-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="pt-2">
                <button 
                    type="submit" 
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-colors shadow-md shadow-emerald-200 active:transform active:scale-[0.98]"
                >
                    Save Category
                </button>
                <a 
                    href="{{ route('categories.index') }}"
                    class="block w-full text-center mt-3 text-sm text-gray-500 hover:text-gray-700 font-medium transition-colors"
                >
                    Cancel and go back
                </a>
            </div>
        </form>
    </div>

</body>
</html>
@endsection