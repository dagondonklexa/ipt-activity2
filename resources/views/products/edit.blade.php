
@extends('layouts.app')

@section('title', 'My Site | Edit Product')

@section('content')
<div class="min-h-screen bg-slate-950 py-8 px-4 sm:px-6 lg:px-8 text-slate-200 pt-25">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-white tracking-tight">Edit Product</h2>
                <p class="mt-1 text-sm text-slate-400">Update the details for <strong>{{ $product->name }}</strong>.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('products.index') }}"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Products
                </a>
                <a href="{{ route('categories.index') }}"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                    View Categories
                </a>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl shadow-2xl border border-slate-800 overflow-hidden">
            <div class="grid gap-8 lg:grid-cols-[1.4fr_0.9fr] p-8">
                <div class="space-y-6">
                    <div class="rounded-3xl bg-slate-950/60 border border-slate-800 p-6">
                        <h3 class="text-xl font-semibold text-white">Edit product details</h3>
                        <p class="mt-2 text-sm text-slate-400">Update the product name, price, or category assignment.</p>
                    </div>

                    <form method="POST" action="{{ route('products.update', $product->id) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-200 mb-2">Product Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name', $product->name) }}"
                                placeholder="Wireless Headphones"
                                class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                            >
                            @error('name')
                                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-semibold text-slate-200 mb-2">Price</label>
                            <div class="relative">
                                <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">₱</span>
                                <input
                                    type="text"
                                    name="price"
                                    id="price"
                                    value="{{ old('price', $product->price) }}"
                                    placeholder="0.00"
                                    class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-10 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                                >
                            </div>
                            @error('price')
                                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="category_id" class="block text-sm font-semibold text-slate-200 mb-2">Category</label>
                            <select
                                name="category_id"
                                id="category_id"
                                class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                            >
                                <option value="" disabled>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->cat_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <button
                                type="submit"
                                class="inline-flex justify-center items-center rounded-2xl bg-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:bg-indigo-400 transition-all duration-200"
                            >
                                Update Product
                            </button>
                            <a
                                href="{{ route('products.index') }}"
                                class="inline-flex justify-center items-center rounded-2xl border border-slate-700 bg-slate-800 px-6 py-3 text-sm font-semibold text-slate-200 hover:border-slate-600 hover:bg-slate-700 transition-all duration-200"
                            >
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>

                <div class="space-y-6">
                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Edit notes</h3>
                        <ul class="mt-4 space-y-3 text-sm text-slate-400">
                            <li class="flex gap-3 items-start">
                                <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Keep the name short and descriptive.
                            </li>
                            <li class="flex gap-3 items-start">
                                <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Use the price field in the same format as other products.
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Quick actions</h3>
                        <div class="mt-4 space-y-3">
                            <a href="{{ route('products.index') }}" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                View all products
                            </a>
                            <a href="{{ route('categories.index') }}" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                Manage categories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center text-xs text-slate-500 italic">Update this product's information in the inventory.</div>
    </div>
</div>
@endsection