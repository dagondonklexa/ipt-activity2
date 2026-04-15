<footer class="bg-slate-900 border-t border-slate-800 text-slate-300 pt-10">
    <div class="max-w-6xl mx-auto px-6 py-10">

        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <!-- Left -->
            <div class="text-center md:text-left">
                <h2 class="text-white text-lg font-semibold">
                    Product Management System
                </h2>
                <p class="text-sm text-slate-400 mt-1">
                    Manage products and categories easily
                </p>
            </div>

            <!-- Center Links -->
            <div class="flex gap-6 text-sm">
                <a href="<?php echo e(route('products.index')); ?>" class="text-slate-300 hover:text-white transition-colors duration-200">
                    Products
                </a>
                <a href="<?php echo e(route('categories.index')); ?>" class="text-slate-300 hover:text-white transition-colors duration-200">
                    Categories
                </a>
            </div>

            <!-- Right -->
            <div class="text-sm text-slate-400 text-center md:text-right">
                © <?php echo e(date('Y')); ?> All Rights Reserved
            </div>

        </div>

    </div>
</footer><?php /**PATH C:\xampp\htdocs\ipt-activity2\resources\views/partials/footer.blade.php ENDPATH**/ ?>