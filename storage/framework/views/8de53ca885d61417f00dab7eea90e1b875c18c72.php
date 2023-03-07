<!-- Header -->
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between">
        <span>
            <?php echo e(translate('top rated')); ?><?php if(Config::get('module.current_module_type')== 'food'): ?>
            <?php echo e(translate('messages.foods')); ?>

        <?php else: ?>
            <?php echo e(translate('messages.items')); ?>

        <?php endif; ?>
        </span>
    </h5>
    <?php ($params=session('dash_params')); ?>
    <?php if($params['zone_id']!='all'): ?>
        <?php ($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name); ?>
    <?php else: ?>
        <?php ($zone_name = translate('messages.all')); ?>
    <?php endif; ?>
    
    <a href="<?php echo e(route('admin.item.list')); ?>" class="fz-12px font-medium text-006AE5"><?php echo e(translate('view_all')); ?></a>
</div>
<!-- End Header -->

<!-- Body -->
<div class="card-body">
    <div class="rated--products">
        <?php $__currentLoopData = $top_rated_foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('admin.item.view',[$item['id']])); ?>">
                <div class="rated-media d-flex align-items-center">
                    <img src="<?php echo e(asset('storage/app/public/product')); ?>/<?php echo e($item['image']); ?>" onerror="this.src='<?php echo e(asset('public/assets/admin/img/100x100/2.png')); ?>'" alt="<?php echo e(Str::limit($item->name??translate('messages.Item deleted!'),20,'...')); ?>">
                    <span class="line--limit-1 w-0 flex-grow-1">
                        <?php echo e(Str::limit($item->name??translate('messages.Item deleted!'),20,'...')); ?>

                    </span>
                    <div>
                        <span class="text-FF6D6D"><?php echo e($item['rating_count']); ?> <i class="tio-heart"></i></span>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End Body -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/partials/_top-rated-foods.blade.php ENDPATH**/ ?>