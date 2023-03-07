<!-- Header -->
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between">
        <span><?php echo e(translate('messages.top_customers')); ?></span>
    </h5>
        <a href="<?php echo e(route('admin.users.customer.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
</div>
<!-- End Header -->

<!-- Body -->
<div class="card-body">
    <div class="top--selling">
        
            <?php $__currentLoopData = $top_customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="grid--card" href="<?php echo e(route('admin.users.customer.view',[$item['id']])); ?>">
                <img onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img1.jpg')); ?>'" src="<?php echo e(asset('storage/app/public/profile/'.$item->image??'')); ?>">
                <div class="cont pt-2">
                    <h6 class="mb-1"><?php echo e($item['f_name']?? translate('Not exist')); ?></h6>
                    <span><?php echo e($item['phone']??''); ?></span>
                </div>
                <div class="ml-auto">
                    <span class="badge badge-soft"><?php echo e(translate('Orders')); ?> : <?php echo e($item['order_count']); ?></span>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<!-- End Body -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/partials/_top-customer.blade.php ENDPATH**/ ?>