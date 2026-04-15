

<?php $__env->startSection('title', 'My Site | Categories'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-slate-950 py-8 px-4 sm:px-6 lg:px-8 text-slate-200 pt-25">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-white tracking-tight">Categories</h2>
                <p class="mt-1 text-sm text-slate-400">Manage and organize product classifications for your inventory.</p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="<?php echo e(route('home')); ?>"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Products
                </a>
                <a href="<?php echo e(route('categories.create')); ?>"
                    class="inline-flex items-center px-5 py-2.5 border border-transparent shadow-lg shadow-indigo-500/20 text-sm font-medium rounded-xl text-white bg-indigo-500 hover:bg-indigo-400 transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Category
                </a>
            </div>
        </div>

        <div class="bg-slate-900 rounded-3xl shadow-2xl border border-slate-800 overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="grid gap-6 lg:grid-cols-3">
                    <div class="lg:col-span-3 bg-slate-950/50 rounded-3xl border border-slate-800 p-6">
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-5 shadow-sm transition hover:border-indigo-500/30 hover:shadow-indigo-500/10">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="h-10 w-10 rounded-full border border-slate-700 shadow-inner" style="background-color: <?php echo e($category->cat_color); ?>"></div>
                                        <div>
                                            <h3 class="text-sm font-semibold text-white truncate"><?php echo e($category->cat_name); ?></h3>
                                            <p class="text-xs uppercase text-slate-500 mt-1 truncate"><?php echo e($category->cat_color); ?></p>
                                        </div>
                                    </div>

                                   
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="lg:col-span-3 rounded-3xl border border-slate-800 bg-slate-950/40 p-10 text-center">
                                    <div class="mx-auto inline-flex h-16 w-16 items-center justify-center rounded-full bg-slate-800 text-slate-400 mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                    </div>
                                    <p class="text-slate-400 font-medium">No categories found yet.</p>
                                    <a href="<?php echo e(route('categories.create')); ?>" class="mt-3 inline-flex rounded-2xl border border-indigo-500 bg-indigo-500/10 px-4 py-2 text-sm font-semibold text-indigo-300 hover:bg-indigo-500/20 transition">
                                        Add your first category
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center text-xs text-slate-500 italic">Categories help you group products and improve inventory filtering.</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\dagon\ipt-activity2\resources\views/categories/index.blade.php ENDPATH**/ ?>