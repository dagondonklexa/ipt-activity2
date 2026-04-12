

<?php $__env->startSection('title', 'My Site | Edit Category'); ?>

<?php $__env->startSection("content"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Category</title>
</head>
<body>
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg border border-gray-100 p-8 flex flex-col justify-center items-center container mx-auto mt-20">
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Edit Category</h2>
            <p class="text-gray-500 text-sm mt-1">Update category details.</p>
        </div>

        <form method="POST" action="<?php echo e(route('categories.update', $category->id)); ?>" class="space-y-6 w-full">
            <!-- CSRF Token (Laravel) -->
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Category Name -->
            <div>
                <label for="cat_name" class="block text-sm font-semibold text-gray-700 mb-1">Category Name</label>
                <input 
                    type="text" 
                    name="cat_name" 
                    id="cat_name"
                    value="<?php echo e(old('cat_name', $category->cat_name)); ?>"
                    placeholder="e.g. Electronics" 
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all placeholder:text-gray-400 <?php $__errorArgs = ['cat_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                >
                <?php $__errorArgs = ['cat_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-xs mt-1"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Category Color -->
            <div>
                <label for="cat_color" class="block text-sm font-semibold text-gray-700 mb-1">Category Color</label>
                <div class="flex gap-2">
                    <input 
                        type="text" 
                        name="cat_color" 
                        id="cat_color"
                        value="<?php echo e(old('cat_color', $category->cat_color)); ?>"
                        placeholder="e.g. #FF5733 or Blue" 
                        class="flex-1 px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all placeholder:text-gray-400 <?php $__errorArgs = ['cat_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    <div class="w-12 h-auto rounded-lg border border-gray-300 bg-emerald-100 flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full" style="background-color: <?php echo e($category->cat_color); ?>;"></div>
                    </div>
                </div>
                <?php $__errorArgs = ['cat_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-xs mt-1"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-xs text-gray-400 mt-2">Used for labels</p>
            </div>

            <!-- Action Buttons -->
            <div class="pt-2">
                <button 
                    type="submit" 
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-colors shadow-md shadow-emerald-200 active:transform active:scale-[0.98]"
                >
                    Update Category
                </button>
                <a 
                    href="<?php echo e(route('categories.index')); ?>"
                    class="block w-full text-center mt-3 text-sm text-gray-500 hover:text-gray-700 font-medium transition-colors"
                >
                    Cancel and go back
                </a>
            </div>
        </form>
    </div>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\ipt-activity2\resources\views/categories/edit.blade.php ENDPATH**/ ?>