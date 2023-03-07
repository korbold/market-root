<!-- Header -->
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between">
        <?php echo e(translate('top selling stores')); ?>

    </h5>
    <?php ($params=session('dash_params')); ?>
    <?php if($params['zone_id']!='all'): ?>
        <?php ($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name); ?>
    <?php else: ?>
        <?php ($zone_name = translate('messages.all')); ?>
    <?php endif; ?>
    
        <a href="<?php echo e(route('admin.store.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
</div>
<!-- End Header -->

<!-- Body -->
<div class="card-body __top-resturant-card">
    <div class="__top-resturant">
        <?php $__currentLoopData = $top_restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('admin.store.view', $item->id)); ?>">
            <div class="position-relative overflow-hidden">
                <img onerror="this.src='<?php echo e(asset('public/assets/admin/img/100x100/1.png')); ?>'" src="<?php echo e(asset('storage/app/public/store')); ?>/<?php echo e($item['logo']); ?>">
                <h5 class="info m-0">
                    <?php echo e(translate('order : ')); ?> <?php echo e($item['order_count']); ?>

                </h5>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End Body -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/partials/_top-restaurants.blade.php ENDPATH**/ ?>