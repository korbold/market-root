<!-- Header -->
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between">
        <span><?php echo e(translate('messages.top_deliveryman')); ?></span>
    </h5>
    <?php ($params=session('dash_params')); ?>
    <?php if($params['zone_id']!='all'): ?>
        <?php ($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name); ?>
    <?php else: ?>
        <?php ($zone_name = translate('messages.all')); ?>
    <?php endif; ?>
    
        <a href="<?php echo e(route('admin.users.delivery-man.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
</div>
<!-- End Header -->
<!-- Body -->
<div class="card-body">
    <div class="top--selling">
        <?php $__currentLoopData = $top_deliveryman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a class="grid--card" href="<?php echo e(route('admin.users.delivery-man.preview',[$item['id']])); ?>">
                <img onerror="this.src='<?php echo e(asset('public/assets/admin/img/admin.png')); ?>'" src="<?php echo e(asset('storage/app/public/delivery-man')); ?>/<?php echo e($item['image']??''); ?>" alt="<?php echo e($item['f_name']); ?>" >
                <div class="cont pt-2">
                    <h6 class="mb-1"><?php echo e($item['f_name']??'Not exist'); ?></h6>
                    <span><?php echo e($item['phone']); ?></span>
                </div>
                <div class="ml-auto">
                    <span class="badge badge-soft"><?php echo e(translate('messages.orders')); ?> : <?php echo e($item['orders_count']); ?></span>
                </div>
            </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End Body -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/partials/_top-deliveryman.blade.php ENDPATH**/ ?>