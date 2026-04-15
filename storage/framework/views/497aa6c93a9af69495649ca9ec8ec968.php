

<?php $__env->startSection('title', 'My Site | Product List'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-slate-950 py-8 px-4 sm:px-6 lg:px-8 text-slate-200 pt-25">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-white tracking-tight">Products</h2>
                <p class="mt-1 text-sm text-slate-400">Inventory management and stock control dashboard.</p>
            </div>
            
            <div class="flex flex-wrap gap-3">
                <a href="<?php echo e(route('categories.index')); ?>"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                    Categories
                </a>
                <a href="<?php echo e(route('products.create')); ?>"
                    class="inline-flex items-center px-5 py-2.5 border border-transparent shadow-lg shadow-indigo-500/20 text-sm font-medium rounded-xl text-white bg-indigo-500 hover:bg-indigo-400 transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Product
                </a>
            </div>
        </div>

        <!-- Table Card -->
        <div class="bg-slate-900 rounded-2xl shadow-2xl border border-slate-800 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-separate border-spacing-0">
                    <thead>
                        <tr class="bg-slate-800/50">
                            <th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-slate-400 border-b border-slate-800">Product Details</th>
                            <th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-slate-400 border-b border-slate-800">Price</th>
                            <th class="hidden md:table-cell px-6 py-5 text-xs font-bold uppercase tracking-widest text-slate-400 border-b border-slate-800">Category</th>
                            <th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-center text-slate-400 border-b border-slate-800">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="group hover:bg-slate-800/40 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-11 w-11 flex-shrink-0 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-500/10">
                                        <?php echo e(strtoupper(substr($product->name, 0, 1))); ?>

                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-white group-hover:text-indigo-300 transition-colors"><?php echo e($product->name); ?></div>
                                        <div class="md:hidden text-xs text-slate-500 mt-1">
                                            <?php echo e($product->category?->cat_name ?? 'No Category'); ?>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm font-mono font-medium text-emerald-400">₱<?php echo e(number_format($product->price, 2)); ?></span>
                            </td>
                            <td class="hidden md:table-cell px-6 py-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold <?php echo e($product->category ? 'bg-indigo-500/10 text-indigo-400 border border-indigo-500/20' : 'bg-slate-800 text-slate-500 border border-slate-700'); ?>">
                                    <?php echo e($product->category?->cat_name ?? 'Uncategorized'); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-4">
                                    <a href="<?php echo e(route('products.edit', $product->id)); ?>" 
                                       class="text-slate-400 hover:text-white transition-all transform hover:scale-110"
                                       title="Edit Product">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>

                                    <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" 
                                          onsubmit="return confirm('Remove this product from inventory?')" 
                                          class="inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-slate-400 hover:text-red-400 transition-all transform hover:scale-110" title="Delete Product">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="px-6 py-20 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="p-4 rounded-full bg-slate-800 mb-4">
                                        <svg class="w-10 h-10 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                    </div>
                                    <p class="text-slate-400 font-medium">Your inventory is empty</p>
                                    <a href="<?php echo e(route('products.create')); ?>" class="mt-3 text-sm text-indigo-400 hover:text-indigo-300 font-semibold underline underline-offset-4 transition-colors">
                                        Add your first product now
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Footer Info -->
        <div class="mt-6 flex justify-center md:justify-end">
            <p class="text-xs text-slate-500 italic">Showing all registered products in the system.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\dagon\ipt-activity2\resources\views/products/index.blade.php ENDPATH**/ ?>