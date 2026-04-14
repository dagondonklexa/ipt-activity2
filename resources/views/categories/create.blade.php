
@extends('layouts.app')

@section('title', 'My Site | Add Category')

@section('content')
<div class="min-h-screen bg-slate-950 py-8 px-4 sm:px-6 lg:px-8 text-slate-200 pt-25">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-white tracking-tight">Add Category</h2>
                <p class="mt-1 text-sm text-slate-400">Create a new category to organize your products.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('categories.index') }}"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Categories
                </a>
                <a href="{{ route('products.index') }}"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Products
                </a>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl shadow-2xl border border-slate-800 overflow-hidden">
            <div class="grid gap-8 lg:grid-cols-[1.4fr_0.9fr] p-8">
                <div class="space-y-6">
                    <div class="rounded-3xl bg-slate-950/60 border border-slate-800 p-6">
                        <h3 class="text-xl font-semibold text-white">Category details</h3>
                        <p class="mt-2 text-sm text-slate-400">Add a category name and a color label for easy organization.</p>
                    </div>

                    <form method="POST" action="{{ route('categories.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label for="cat_name" class="block text-sm font-semibold text-slate-200 mb-2">Category Name</label>
                            <input
                                type="text"
                                name="cat_name"
                                id="cat_name"
                                value="{{ old('cat_name') }}"
                                placeholder="Electronics"
                                class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                            >
                            @error('cat_name')
                                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="cat_color" class="block text-sm font-semibold text-slate-200 mb-2">Category Color</label>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <input
                                    type="text"
                                    name="cat_color"
                                    id="cat_color"
                                    value="{{ old('cat_color') }}"
                                    placeholder="#FF5733 or blue"
                                    class="flex-1 rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                                >
                                <div class="flex h-14 w-14 items-center justify-center rounded-3xl border border-slate-700 bg-slate-900">
                                    <div class="h-10 w-10 rounded-full" style="background-color: {{ old('cat_color', '#4f46e5') }}"></div>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mt-2">This color is used for category labels and badges.</p>
                            @error('cat_color')
                                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <button
                                type="submit"
                                class="inline-flex justify-center items-center rounded-2xl bg-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:bg-indigo-400 transition-all duration-200"
                            >
                                Save Category
                            </button>
                            <a
                                href="{{ route('categories.index') }}"
                                class="inline-flex justify-center items-center rounded-2xl border border-slate-700 bg-slate-800 px-6 py-3 text-sm font-semibold text-slate-200 hover:border-slate-600 hover:bg-slate-700 transition-all duration-200"
                            >
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>

                <div class="space-y-6">
                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Why categories matter</h3>
                        <p class="mt-3 text-sm text-slate-400">Organized categories make it easier to filter products, understand stock levels, and keep your inventory dashboard clean.</p>
                    </div>

                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Quick actions</h3>
                        <div class="mt-4 space-y-3">
                            <a href="{{ route('categories.index') }}" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                View categories
                            </a>
                            <a href="{{ route('products.index') }}" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                Return to products
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center text-xs text-slate-500 italic">Use this form to add a new category for your inventory.</div>
    </div>
</div>
@endsection