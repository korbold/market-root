<?php $__env->startSection('title',translate('messages.modules')); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-header-title">
                <span class="page-header-icon">
                    <img src="<?php echo e(asset('public/assets/admin/img/module.png')); ?>" alt="">
                </span>
                <span>
                    <?php echo e(translate('messages.module')); ?>

                </span>
                <span class="badge badge-soft-dark ml-2" id="itemCount"><?php echo e($modules->total()); ?></span>
            </h1>
        </div>
        <!-- End Page Header -->
        <div class="card">

        <!-- Header -->
        <div class="card-header border-0 py-2">
            <div class="search--button-wrapper justify-content-end">
                <form id="search-form" class="search-form">
                    <?php echo csrf_field(); ?>
                    <!-- Search -->
                    <div class="input-group input--group">
                        <input id="datatableSearch" name="search" type="search" class="form-control" placeholder="<?php echo e(translate('ex_:_search_name')); ?>" aria-label="<?php echo e(translate('messages.search_here')); ?>" value="<?php echo e(request()->query('search')); ?>">
                        <button type="submit" class="btn btn--secondary"><i class="tio-search"></i></button>
                    </div>
                    <!-- End Search -->
                </form>
                <div class="hs-unfold mr-2">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle min-height-40" href="javascript:;"
                        data-hs-unfold-options='{
                                "target": "#usersExportDropdown",
                                "type": "css-animation"
                            }'>
                        <i class="tio-download-to mr-1"></i> <?php echo e(translate('messages.export')); ?>

                    </a>

                    <div id="usersExportDropdown"
                        class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                        
                        <span class="dropdown-header"><?php echo e(translate('messages.download')); ?>

                            <?php echo e(translate('messages.options')); ?></span>
                        <a id="export-excel" class="dropdown-item" href="<?php echo e(route('admin.business-settings.module.export', ['type'=>'excel'])); ?>">
                            <img class="avatar avatar-xss avatar-4by3 mr-2"
                                src="<?php echo e(asset('public/assets/admin')); ?>/svg/components/excel.svg"
                                alt="Image Description">
                            <?php echo e(translate('messages.excel')); ?>

                        </a>
                        <a id="export-csv" class="dropdown-item" href="<?php echo e(route('admin.business-settings.module.export', ['type'=>'csv'])); ?>">
                            <img class="avatar avatar-xss avatar-4by3 mr-2"
                                src="<?php echo e(asset('public/assets/admin')); ?>/svg/components/placeholder-csv-format.svg"
                                alt="Image Description">
                            .<?php echo e(translate('messages.csv')); ?>

                        </a>
                        
                    </div>
                </div>
                <!-- End Unfold -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Header -->
            <div class="card-body p-0">
                <div class="table-responsive datatable-custom">
                    <table id="columnSearchDatatable"
                        class="table table-borderless table-thead-bordered table-align-middle"
                        data-hs-datatables-options='{
                            "isResponsive": false,
                            "isShowPaging": false,
                            "paging":false,
                        }'>
                        <thead class="thead-light border-0">
                            <tr>
                                <th class="border-0 pl-4 w--05">SL</th>
                                <th class="border-0 w--1"><?php echo e(translate('messages.id')); ?></th>
                                <th class="border-0 w--2"><?php echo e(translate('messages.name')); ?></th>
                                <th class="border-0 w--2"><?php echo e(translate('messages.module_type')); ?></th>
                                <th class="border-0 w--1"><?php echo e(translate('messages.status')); ?></th>
                                <th class="border-0 text-center w--2"><?php echo e(translate('messages.store_count')); ?></th>
                                <th class="border-0 text-center w--15"><?php echo e(translate('messages.action')); ?></th>
                            </tr>
                        </thead>

                        <tbody id="table-div">
                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="pl-4"><?php echo e($key+$modules->firstItem()); ?></td>
                                <td><?php echo e($module->id); ?></td>
                                <td>
                                    <span class="d-block font-size-sm text-body">
                                        <?php echo e(Str::limit($module['module_name'], 20,'...')); ?>

                                    </span>
                                </td>
                                <td>
                                    <span class="d-block font-size-sm text-body text-capitalize">
                                        <?php echo e(Str::limit($module['module_type'], 20,'...')); ?>

                                    </span>
                                </td>
                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox<?php echo e($module->id); ?>">
                                    <input type="checkbox" onclick="location.href='<?php echo e(route('admin.business-settings.module.status',[$module['id'],$module->status?0:1])); ?>'"class="toggle-switch-input" id="stocksCheckbox<?php echo e($module->id); ?>" <?php echo e($module->status?'checked':''); ?>>
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td class="text-center"><?php echo e($module->stores_count); ?></td>
                                <td>
                                    <div class="btn--container justify-content-center">
                                        <a class="btn action-btn btn--primary btn-outline-primary"
                                            href="<?php echo e(route('admin.business-settings.module.edit',[$module['id']])); ?>" title="<?php echo e(translate('messages.edit')); ?> <?php echo e(translate('messages.category')); ?>"><i class="tio-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer page-area">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <?php echo $modules->links(); ?>

                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
                <?php if(count($modules) === 0): ?>
                <div class="empty--data">
                    <img src="<?php echo e(asset('/public/assets/admin/svg/illustrations/sorry.svg')); ?>" alt="public">
                    <h5>
                        <?php echo e(translate('no_data_found')); ?>

                    </h5>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_2'); ?>
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF DATATABLES
            // =======================================================

            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>
        <script>
            $('#search-form').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post({
                    url: '<?php echo e(route('admin.business-settings.module.search')); ?>',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $('#loading').show();
                    },
                    success: function (data) {
                        $('.page-area').hide();
                        $('#table-div').html(data.view);
                        $('#itemCount').html(data.count);
                    },
                    complete: function () {
                        $('#loading').hide();
                    },
                });
            });
        </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/module/index.blade.php ENDPATH**/ ?>