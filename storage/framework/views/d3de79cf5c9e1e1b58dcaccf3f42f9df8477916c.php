<!-- Header -->
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between">
        <?php echo e(translate('most rated')); ?> <?php if(Config::get('module.current_module_type')== 'food'): ?>
            <?php echo e(translate('messages.restaurants')); ?>

        <?php else: ?>
            <?php echo e(translate('messages.stores')); ?>

        <?php endif; ?>
    </h5>
    <?php ($params=session('dash_params')); ?>
    <?php if($params['zone_id']!='all'): ?>
        <?php ($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name); ?>
    <?php else: ?>
        <?php ($zone_name = translate('messages.all')); ?>
    <?php endif; ?>
    
</div>
<!-- End Header -->

<!-- Body -->
<div class="card-body">
    <ul class="most-popular">
    <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="cursor-pointer" onclick="location.href='<?php echo e(route('admin.store.view', $item->store_id)); ?>'">
            <div class="img-container">
                <img onerror="this.src='<?php echo e(asset('public/assets/admin/img/100x100/1.png')); ?>'" src="<?php echo e(asset('storage/app/public/store')); ?>/<?php echo e($item->store['logo']); ?>" alt="<?php echo e(translate('store')); ?>">
                <span class="ml-2"> <?php echo e(Str::limit($item->store->name??translate('messages.store deleted!'), 20, '...')); ?> </span>
            </div>
            <span class="badge badge-soft text--primary px-2">
                <span>
                    <?php echo e($item['count']); ?>

                </span>
                <i class="tio-star"></i>
            </span>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/partials/_popular-restaurants.blade.php ENDPATH**/ ?>