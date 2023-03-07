<?php $__env->startSection('title', translate('Item Preview')); ?>

<?php $__env->startPush('css_or_js'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="d-flex flex-wrap justify-content-between">
                <h1 class="page-header-title text-break">
                    <span class="page-header-icon">
                        <img src="<?php echo e(asset('public/assets/admin/img/items.png')); ?>" class="w--22" alt="">
                    </span>
                    <span><?php echo e($product['name']); ?></span>
                </h1>
                <a href="<?php echo e(route('admin.item.edit', [$product['id']])); ?>" class="btn btn--primary">
                    <i class="tio-edit"></i> <?php echo e(translate('messages.edit_info')); ?>

                </a>
            </div>
        </div>
        <!-- End Page Header -->

        <div class="row review--information-wrapper g-2 mb-3">
            <div class="col-lg-9">
                <div class="card h-100">
                    <!-- Body -->
                    <div class="card-body">
                        <div class="row align-items-md-center">
                            <div class="col-lg-5 col-md-6 mb-3 mb-md-0">
                                <div class="d-flex flex-wrap align-items-center food--media">
                                    <img class="avatar avatar-xxl avatar-4by3 mr-4"
                                        src="<?php echo e(asset('storage/app/public/product')); ?>/<?php echo e($product['image']); ?>"
                                        onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img2.jpg')); ?>'"
                                        alt="Image Description">
                                    <div class="d-block">
                                        <div class="rating--review">
                                            
                                            <h1 class="title"><?php echo e(number_format($product->avg_rating, 1)); ?><span
                                                    class="out-of">/5</span></h1>
                                            <?php if($product->avg_rating == 5): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 5 && $product->avg_rating >= 4.5): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-half"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 4.5 && $product->avg_rating >= 4): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 4 && $product->avg_rating >= 3.5): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-half"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 3.5 && $product->avg_rating >= 3): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 3 && $product->avg_rating >= 2.5): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-half"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 2.5 && $product->avg_rating > 2): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 2 && $product->avg_rating >= 1.5): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-half"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 1.5 && $product->avg_rating > 1): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating < 1 && $product->avg_rating > 0): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star-half"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating == 1): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php elseif($product->avg_rating == 0): ?>
                                                <div class="rating">
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                    <span><i class="tio-star-outlined"></i></span>
                                                </div>
                                            <?php endif; ?>
                                            <div class="info">
                                                
                                                <span><?php echo e(translate('messages.of')); ?> <?php echo e($product->reviews->count()); ?>

                                                    <?php echo e(translate('messages.reviews')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 mx-auto">
                                <ul class="list-unstyled list-unstyled-py-2 mb-0 rating--review-right py-3">
                                    <?php ($total = $product->rating ? array_sum(json_decode($product->rating, true)) : 0); ?>
                                    <!-- Review Ratings -->
                                    <li class="d-flex align-items-center font-size-sm">
                                        <?php ($five = $product->rating ? json_decode($product->rating, true)[5] : 0); ?>
                                        <span class="progress-name mr-3"><?php echo e(translate('excellent_')); ?></span>
                                        <div class="progress flex-grow-1">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo e($total == 0 ? 0 : ($five / $total) * 100); ?>%;"
                                                aria-valuenow="<?php echo e($total == 0 ? 0 : ($five / $total) * 100); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3"><?php echo e($five); ?></span>
                                    </li>
                                    <!-- End Review Ratings -->

                                    <!-- Review Ratings -->
                                    <li class="d-flex align-items-center font-size-sm">
                                        <?php ($four = $product->rating ? json_decode($product->rating, true)[4] : 0); ?>
                                        <span class="progress-name mr-3"><?php echo e(translate('good')); ?></span>
                                        <div class="progress flex-grow-1">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo e($total == 0 ? 0 : ($four / $total) * 100); ?>%;"
                                                aria-valuenow="<?php echo e($total == 0 ? 0 : ($four / $total) * 100); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3"><?php echo e($four); ?></span>
                                    </li>
                                    <!-- End Review Ratings -->

                                    <!-- Review Ratings -->
                                    <li class="d-flex align-items-center font-size-sm">
                                        <?php ($three = $product->rating ? json_decode($product->rating, true)[3] : 0); ?>
                                        <span class="progress-name mr-3"><?php echo e(translate('average')); ?></span>
                                        <div class="progress flex-grow-1">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo e($total == 0 ? 0 : ($three / $total) * 100); ?>%;"
                                                aria-valuenow="<?php echo e($total == 0 ? 0 : ($three / $total) * 100); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3"><?php echo e($three); ?></span>
                                    </li>
                                    <!-- End Review Ratings -->

                                    <!-- Review Ratings -->
                                    <li class="d-flex align-items-center font-size-sm">
                                        <?php ($two = $product->rating ? json_decode($product->rating, true)[2] : 0); ?>
                                        <span class="progress-name mr-3"><?php echo e(translate('below_average')); ?></span>
                                        <div class="progress flex-grow-1">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo e($total == 0 ? 0 : ($two / $total) * 100); ?>%;"
                                                aria-valuenow="<?php echo e($total == 0 ? 0 : ($two / $total) * 100); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3"><?php echo e($two); ?></span>
                                    </li>
                                    <!-- End Review Ratings -->

                                    <!-- Review Ratings -->
                                    <li class="d-flex align-items-center font-size-sm">
                                        <?php ($one = $product->rating ? json_decode($product->rating, true)[1] : 0); ?>
                                        <span class="progress-name mr-3"><?php echo e(translate('poor')); ?></span>
                                        <div class="progress flex-grow-1">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo e($total == 0 ? 0 : ($one / $total) * 100); ?>%;"
                                                aria-valuenow="<?php echo e($total == 0 ? 0 : ($one / $total) * 100); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3"><?php echo e($one); ?></span>
                                    </li>
                                    <!-- End Review Ratings -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Body -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <?php if($product->store): ?>
                            <a class="resturant--information-single"
                                href="<?php echo e(route('admin.store.view', $product->store_id)); ?>">
                                <img class="img--120 rounded mx-auto mb-3"
                                    onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img1.jpg')); ?>'"
                                    src="<?php echo e(asset('storage/app/public/store/' . $product->store->logo)); ?>"
                                    alt="Image Description">
                                <div class="text-center">
                                    <h5 class="text-capitalize text--title font-semibold text-hover-primary d-block mb-1">
                                        <?php echo e($product->store['name']); ?>

                                    </h5>
                                    <span class="text--title">
                                        <i class="tio-poi"></i> <?php echo e($product->store['address']); ?>

                                    </span>
                                </div>
                            </a>
                        <?php else: ?>
                            <span class="badge-info"><?php echo e(translate('messages.store')); ?>

                                <?php echo e(translate('messages.deleted')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Description Card Start -->
        <div class="card mb-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless table-thead-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th class="px-4 border-0">
                                    <h4 class="m-0 text-capitalize"><?php echo e(translate('short_description')); ?></h4>
                                </th>
                                <th class="px-4 border-0">
                                    <h4 class="m-0 text-capitalize"><?php echo e(translate('price')); ?></h4>
                                </th>
                                <th class="px-4 border-0">
                                    <h4 class="m-0 text-capitalize"><?php echo e(translate('variations')); ?></h4>
                                </th>
                                <?php if($product->module->module_type == 'food'): ?>
                                    <th class="px-4 border-0">
                                        <h4 class="m-0 text-capitalize"><?php echo e(translate('addons')); ?></h4>
                                    </th>
                                <?php endif; ?>
                                <th class="px-4 border-0">
                                    <h4 class="m-0 text-capitalize"><?php echo e(translate('tags')); ?></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 max-w--220px">
                                    <div class="">
                                        <?php echo $product['description']; ?>

                                    </div>
                                </td>
                                <td class="px-4">
                                    <span class="d-block mb-1">
                                        <span><?php echo e(translate('messages.price')); ?> : </span>
                                        <strong><?php echo e(\App\CentralLogics\Helpers::format_currency($product['price'])); ?></strong>
                                    </span>
                                    <span class="d-block mb-1">
                                        <span><?php echo e(translate('messages.discount')); ?> :</span>
                                        <strong><?php echo e(\App\CentralLogics\Helpers::format_currency(\App\CentralLogics\Helpers::discount_calculate($product, $product['price']))); ?></strong>
                                    </span>
                                    <?php if(config('module.' . $product->module->module_type)['item_available_time']): ?>
                                        <span class="d-block mb-1">
                                            <?php echo e(translate('messages.available')); ?> <?php echo e(translate('messages.time')); ?>

                                            <?php echo e(translate('messages.starts')); ?> :
                                            <strong><?php echo e(date(config('timeformat'), strtotime($product['available_time_starts']))); ?></strong>
                                        </span>
                                        <span class="d-block mb-1">
                                            <?php echo e(translate('messages.available')); ?> <?php echo e(translate('messages.time')); ?>

                                            <?php echo e(translate('messages.ends')); ?> :
                                            <strong><?php echo e(date(config('timeformat'), strtotime($product['available_time_ends']))); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4">
                                        <?php if($product->module->module_type == 'food'): ?>
                                        <?php if($product->food_variations && is_array(json_decode($product['food_variations'], true))): ?>
                                            <?php $__currentLoopData = json_decode($product->food_variations, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($variation['price'])): ?>
                                                    <span class="d-block mb-1 text-capitalize">
                                                        <strong>
                                                            <?php echo e(translate('please_update_the_food_variations.')); ?>

                                                        </strong>
                                                    </span>
                                                <?php break; ?>

                                            <?php else: ?>
                                                <span class="d-block text-capitalize">
                                                    <strong>
                                                        <?php echo e($variation['name']); ?> -
                                                    </strong>
                                                    <?php if($variation['type'] == 'multi'): ?>
                                                        <?php echo e(translate('messages.multiple_select')); ?>

                                                    <?php elseif($variation['type'] == 'single'): ?>
                                                        <?php echo e(translate('messages.single_select')); ?>

                                                    <?php endif; ?>
                                                    <?php if($variation['required'] == 'on'): ?>
                                                        - (<?php echo e(translate('messages.required')); ?>)
                                                    <?php endif; ?>
                                                </span>

                                                <?php if($variation['min'] != 0 && $variation['max'] != 0): ?>
                                                    (<?php echo e(translate('messages.Min_select')); ?>: <?php echo e($variation['min']); ?> -
                                                    <?php echo e(translate('messages.Max_select')); ?>: <?php echo e($variation['max']); ?>)
                                                <?php endif; ?>

                                                <?php if(isset($variation['values'])): ?>
                                                    <?php $__currentLoopData = $variation['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="d-block text-capitalize">
                                                            &nbsp; &nbsp; <?php echo e($value['label']); ?> :
                                                            <strong><?php echo e(\App\CentralLogics\Helpers::format_currency($value['optionPrice'])); ?></strong>
                                                        </span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <?php if($product->variations && is_array(json_decode($product['variations'], true))): ?>
                                        <?php $__currentLoopData = json_decode($product['variations'], true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="d-block mb-1 text-capitalize">
                                                <?php echo e($variation['type']); ?> :
                                                <?php echo e(\App\CentralLogics\Helpers::format_currency($variation['price'])); ?>

                                            </span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                            <?php if($product->module->module_type == 'food'): ?>

                                <td class="px-4">
                                    <?php if(config('module.' . $product->module->module_type)['add_on']): ?>
                                        <?php $__currentLoopData = \App\Models\AddOn::whereIn('id', json_decode($product['add_ons'], true))->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="d-block mb-1 text-capitalize">
                                                <?php echo e($addon['name']); ?> :
                                                <?php echo e(\App\CentralLogics\Helpers::format_currency($addon['price'])); ?>

                                            </span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                            <?php if($product->tags): ?>
                                <td>
                                    <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php echo e($c->tag.','); ?> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Description Card End -->
    <!-- Card -->
    <div class="card">
        <div class="card-header border-0">
            <h4 class="card-title"><?php echo e(translate('messages.product')); ?> <?php echo e(translate('messages.reviews')); ?></h4>
        </div>
        <!-- Table -->
        <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap card-table"
                data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 3, 6],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 25,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                <thead class="thead-light">
                    <tr>
                        <th class="border-0"><?php echo e(translate('messages.reviewer')); ?></th>
                        <th class="border-0"><?php echo e(translate('messages.review')); ?></th>
                        <th class="border-0"><?php echo e(translate('messages.date')); ?></th>
                        <th class="border-0"><?php echo e(translate('messages.status')); ?></th>
                    </tr>
                </thead>

                <tbody>

                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php if($review->customer): ?>
                                    <a class="d-flex align-items-center"
                                        href="<?php echo e(route('admin.customer.view', [$review['user_id']])); ?>">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img" width="75" height="75"
                                                onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img1.jpg')); ?>'"
                                                src="<?php echo e(asset('storage/app/public/profile/' . $review->customer->image)); ?>"
                                                alt="Image Description">
                                        </div>
                                        <div class="ml-3">
                                            <span
                                                class="d-block h5 text-hover-primary mb-0"><?php echo e($review->customer['f_name'] . ' ' . $review->customer['l_name']); ?>

                                                <i class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Verified Customer"></i></span>
                                            <span
                                                class="d-block font-size-sm text-body"><?php echo e($review->customer->email); ?></span>
                                        </div>
                                    </a>
                                    <span class="ml-8"><a
                                            href="<?php echo e(route('admin.order.details', ['id' => $review->order_id])); ?>"><?php echo e(translate('messages.order_id')); ?>:
                                            <?php echo e($review->order_id); ?></a></span>
                                <?php else: ?>
                                    <?php echo e(translate('messages.customer_not_found')); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="text-wrap min--240">
                                    <div class="d-flex mb-2">
                                        <label class="badge badge-soft-info">
                                            <?php echo e($review->rating); ?> <i class="tio-star"></i>
                                        </label>
                                    </div>

                                    <p>
                                        <?php echo e($review['comment']); ?>

                                    </p>
                                </div>
                            </td>
                            <td>
                                <?php echo e(date('d M Y ' . config('timeformat'), strtotime($review['created_at']))); ?>

                            </td>
                            <td>
                                <label class="toggle-switch toggle-switch-sm"
                                    for="reviewCheckbox<?php echo e($review->id); ?>">
                                    <input type="checkbox"
                                        onclick="status_form_alert('status-<?php echo e($review['id']); ?>','<?php echo e($review->status ? translate('messages.you_want_to_hide_this_review_for_customer') : translate('messages.you_want_to_show_this_review_for_customer')); ?>', event)"
                                        class="toggle-switch-input" id="reviewCheckbox<?php echo e($review->id); ?>"
                                        <?php echo e($review->status ? 'checked' : ''); ?>>
                                    <span class="toggle-switch-label">
                                        <span class="toggle-switch-indicator"></span>
                                    </span>
                                </label>
                                <form
                                    action="<?php echo e(route('admin.item.reviews.status', [$review['id'], $review->status ? 0 : 1])); ?>"
                                    method="get" id="status-<?php echo e($review['id']); ?>">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(count($reviews) !== 0): ?>
                <hr>
            <?php endif; ?>
            <div class="page-area">
                <?php echo $reviews->links(); ?>

            </div>
            <?php if(count($reviews) === 0): ?>
                <div class="empty--data">
                    <img src="<?php echo e(asset('/public/assets/admin/svg/illustrations/sorry.svg')); ?>" alt="public">
                    <h5>
                        <?php echo e(translate('no_data_found')); ?>

                    </h5>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer -->
    </div>
    <!-- End Card -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_2'); ?>
<script>
    function status_form_alert(id, message, e) {
        e.preventDefault();
        Swal.fire({
            title: '<?php echo e(translate('messages.are_you_sure')); ?>',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#FC6A57',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#' + id).submit()
            }
        })
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/product/view.blade.php ENDPATH**/ ?>