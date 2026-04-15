


<?php $__env->startSection('title', 'My Site | Add Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-slate-950 py-8 px-4 sm:px-6 lg:px-8 text-slate-200 pt-25">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-white tracking-tight">Add Product</h2>
                <p class="mt-1 text-sm text-slate-400">Create a new inventory item and assign it to a category.</p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="<?php echo e(route('products.index')); ?>"
                    class="inline-flex items-center px-5 py-2.5 border border-slate-700 shadow-sm text-sm font-medium rounded-xl text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Products
                </a>
                <a href="<?php echo e(route('categories.index')); ?>"
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
                        <h3 class="text-xl font-semibold text-white">Product information</h3>
                        <p class="mt-2 text-sm text-slate-400">Add the product name, price, and category to register this item in the inventory.</p>
                    </div>

                    <form method="POST" action="<?php echo e(route('products.store')); ?>" class="space-y-6">
                        <?php echo csrf_field(); ?>

                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-200 mb-2">Product Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="<?php echo e(old('name')); ?>"
                                placeholder="Wireless Headphones"
                                class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                            >
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-2 text-sm text-rose-400"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-semibold text-slate-200 mb-2">Price</label>
                            <div class="relative">
                                <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">₱</span>
                                <input
                                    type="text"
                                    name="price"
                                    id="price"
                                    value="<?php echo e(old('price')); ?>"
                                    placeholder="0.00"
                                    class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-10 py-3 text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                                >
                            </div>
                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-2 text-sm text-rose-400"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="category_id" class="block text-sm font-semibold text-slate-200 mb-2">Category</label>
                            <select
                                name="category_id"
                                id="category_id"
                                class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all"
                            >
                                <option value="" disabled selected>Select Category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->cat_name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-2 text-sm text-rose-400"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <button
                                type="submit"
                                class="inline-flex justify-center items-center rounded-2xl bg-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:bg-indigo-400 transition-all duration-200"
                            >
                                Save Product
                            </button>
                            <a
                                href="<?php echo e(route('products.index')); ?>"
                                class="inline-flex justify-center items-center rounded-2xl border border-slate-700 bg-slate-800 px-6 py-3 text-sm font-semibold text-slate-200 hover:border-slate-600 hover:bg-slate-700 transition-all duration-200"
                            >
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>

                <div class="space-y-6">
                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Product tips</h3>
                        <ul class="mt-4 space-y-3 text-sm text-slate-400">
                            <li class="flex gap-3 items-start">
                                <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Use a concise product name that is easy to scan.
                            </li>
                            <li class="flex gap-3 items-start">
                                <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Set the price with two decimal places to keep formatting consistent.
                            </li>
                            <li class="flex gap-3 items-start">
                                <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Choose a category so the item appears in filtered inventory views.
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-3xl border border-slate-800 bg-slate-950/40 p-6">
                        <h3 class="text-lg font-semibold text-white">Quick actions</h3>
                        <div class="mt-4 space-y-3">
                            <a href="<?php echo e(route('products.index')); ?>" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                View all products
                            </a>
                            <a href="<?php echo e(route('categories.index')); ?>" class="block rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-slate-200 hover:bg-slate-800 transition-all duration-200">
                                Manage categories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center text-xs text-slate-500 italic">Use this form to register a new product in inventory.</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\dagon\ipt-activity2\resources\views/products/create.blade.php ENDPATH**/ ?>