<div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-brand-wrapper justify-content-between">
                <!-- Logo -->
                <?php ($store_logo = \App\Models\BusinessSetting::where(['key' => 'logo'])->first()->value); ?>
                <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>" aria-label="Front">
                    <img class="navbar-brand-logo initial--36" onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img2.jpg')); ?>'" src="<?php echo e(asset('storage/app/public/business/' . $store_logo)); ?>" alt="Logo">
                    <img class="navbar-brand-logo-mini initial--36" onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img2.jpg')); ?>'" src="<?php echo e(asset('storage/app/public/business/' . $store_logo)); ?>" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                    <i class="tio-clear tio-lg"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->

                <div class="navbar-nav-wrap-content-left">
                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker close">
                        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                        data-placement="right" title="Collapse"></i>
                        <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                        data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

            </div>

            <!-- Content -->
            <div class="navbar-vertical-content bg--005555" id="navbar-vertical-content">
                <form class="sidebar--search-form">
                    <div class="search--form-group">
                        <button type="button" class="btn"><i class="tio-search"></i></button>
                        <input type="text" class="form-control form--control" placeholder="<?php echo e(translate('Search Menu...')); ?>" id="search-sidebar-menu">
                    </div>
                </form>
                <ul class="navbar-nav navbar-nav-lg nav-tabs">
                    <!-- Dashboards -->
                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin') ? 'show active' : ''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.dashboard')); ?>?module_id=<?php echo e(Config::get('module.current_module_id')); ?>" title="<?php echo e(translate('messages.dashboard')); ?>">
                            <i class="tio-home-vs-1-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                <?php echo e(translate('messages.dashboard')); ?>

                            </span>
                        </a>
                    </li>
                    <!-- End Dashboards -->
                    <!-- Marketing section -->
                    <li class="nav-item">
                        <small class="nav-subtitle" title="<?php echo e(translate('messages.employee_handle')); ?>"><?php echo e(translate('pos section')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>
                    <!-- Pos -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('pos')): ?>
                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/pos*')?'active':''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link " href="<?php echo e(route('admin.pos.index')); ?>" title="<?php echo e(translate('New Sale')); ?>">
                            <i class="tio-shopping-basket-outlined nav-icon"></i>
                            <span class="text-truncate"><?php echo e(translate('New Sale')); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <!-- Pos -->

                                        <!-- Orders -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('order')): ?>
                    <li class="nav-item">
                        <small class="nav-subtitle"><?php echo e(translate('messages.order')); ?>

                            <?php echo e(translate('messages.management')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/order') ? 'active' : ''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:" title="<?php echo e(translate('messages.orders')); ?>">
                            <i class="tio-shopping-cart nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                <?php echo e(translate('messages.orders')); ?>

                            </span>
                        </a>
                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display:<?php echo e(Request::is('admin/order*') ? 'block' : 'none'); ?>">
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/all') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.order.list', ['all'])); ?>" title="<?php echo e(translate('messages.all')); ?> <?php echo e(translate('messages.orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.all')); ?>

                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/scheduled') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.order.list', ['scheduled'])); ?>" title="<?php echo e(translate('messages.scheduled_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.scheduled')); ?>

                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Scheduled()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/pending') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['pending'])); ?>" title="<?php echo e(translate('messages.pending')); ?> <?php echo e(translate('messages.orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.pending')); ?>

                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Pending()->OrderScheduledIn(30)->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('admin/order/list/accepted') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['accepted'])); ?>" title="<?php echo e(translate('messages.accepted_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.accepted')); ?>

                                        <span class="badge badge-soft-success badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::AccepteByDeliveryman()->OrderScheduledIn(30)->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/processing') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['processing'])); ?>" title="<?php echo e(translate('messages.processing_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.processing')); ?>

                                        <span class="badge badge-soft-warning badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Preparing()->OrderScheduledIn(30)->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/item_on_the_way') ? 'active' : ''); ?>">
                                <a class="nav-link text-capitalize" href="<?php echo e(route('admin.order.list', ['item_on_the_way'])); ?>" title="<?php echo e(translate('messages.order_on_the_way')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.order_on_the_way')); ?>

                                        <span class="badge badge-soft-warning badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::ItemOnTheWay()->OrderScheduledIn(30)->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/delivered') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['delivered'])); ?>" title="<?php echo e(translate('messages.delivered_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.delivered')); ?>

                                        <span class="badge badge-soft-success badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Delivered()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/canceled') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['canceled'])); ?>" title="<?php echo e(translate('messages.canceled_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.canceled')); ?>

                                        <span class="badge badge-soft-warning bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Canceled()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/failed') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['failed'])); ?>" title="<?php echo e(translate('messages.payment_failed_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container text-capitalize">
                                        <?php echo e(translate('messages.payment_failed')); ?>

                                        <span class="badge badge-soft-danger bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::failed()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/order/list/refunded') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.order.list', ['refunded'])); ?>" title="<?php echo e(translate('messages.refunded_orders')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate sidebar--badge-container">
                                        <?php echo e(translate('messages.refunded')); ?>

                                        <span class="badge badge-soft-danger bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Refunded()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Order refund -->
                    <li
                    class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/refund/*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:"
                        title="<?php echo e(translate('Order Refunds')); ?>">
                        <i class="tio-receipt nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            <?php echo e(translate('Order Refunds')); ?>

                        </span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                        style="display: <?php echo e(Request::is('admin/refund*') ? 'block' : 'none'); ?>">

                        <li class="nav-item <?php echo e(Request::is('admin/refund/requested') ||  Request::is('admin/refund/rejected') ||Request::is('admin/refund/refunded') ? 'active' : ''); ?>">
                            <a class="nav-link "
                                href="<?php echo e(route('admin.refund.refund_attr', ['requested'])); ?>"
                                title="<?php echo e(translate('Refund Requests')); ?> ">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate sidebar--badge-container">
                                    <?php echo e(translate('Refund Requests')); ?>

                                    <span class="badge badge-soft-danger badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::Refund_requested()->StoreOrder()->module(Config::get('module.current_module_id'))->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>

                        <li class="nav-item <?php echo e(Request::is('admin/refund/settings') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.refund.refund_settings')); ?>"
                                title="<?php echo e(translate('refund_settings')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate sidebar--badge-container">
                                    <?php echo e(translate('refund_settings')); ?>


                                </span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <!-- Order refund End-->
                    <?php endif; ?>
                    <!-- End Orders -->

                    
                <!-- Marketing section -->
                <li class="nav-item">
                    <small class="nav-subtitle" title="<?php echo e(translate('Promotion Management')); ?>"><?php echo e(translate('Promotion Management')); ?></small>
                    <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>
                <!-- Campaign -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('campaign')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/campaign') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:" title="<?php echo e(translate('messages.campaigns')); ?>">
                        <i class="tio-layers-outlined nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(translate('messages.campaigns')); ?></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display:<?php echo e(Request::is('admin/campaign*') ? 'block' : 'none'); ?>">

                        <li class="nav-item <?php echo e(Request::is('admin/campaign/basic/*') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.campaign.list', 'basic')); ?>" title="<?php echo e(translate('messages.basic_campaigns')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.basic_campaigns')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/campaign/item/*') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.campaign.list', 'item')); ?>" title="<?php echo e(translate('messages.food')); ?> <?php echo e(translate('messages.campaigns')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.food')); ?>

                                    <?php echo e(translate('messages.campaigns')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!-- End Campaign -->
                <!-- Banner -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('banner')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/banner*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.banner.add-new')); ?>" title="<?php echo e(translate('messages.banners')); ?>">
                        <i class="tio-image nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(translate('messages.banners')); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- End Banner -->
                <!-- Coupon -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('coupon')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/coupon*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.coupon.add-new')); ?>" title="<?php echo e(translate('messages.coupons')); ?>">
                        <i class="tio-gift nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(translate('messages.coupons')); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- End Coupon -->
                <!-- Notification -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('notification')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/notification*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.notification.add-new')); ?>" title="<?php echo e(translate('messages.push')); ?> <?php echo e(translate('messages.notification')); ?>">
                        <i class="tio-notifications nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            <?php echo e(translate('messages.push')); ?> <?php echo e(translate('messages.notification')); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- End Notification -->

                <!-- End marketing section -->


                    <li class="nav-item">
                        <small class="nav-subtitle" title="<?php echo e(translate('messages.item')); ?> <?php echo e(translate('messages.section')); ?>"><?php echo e(translate('messages.food')); ?>

                            <?php echo e(translate('messages.management')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <!-- Category -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('category')): ?>
                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/category*') ? 'active' : ''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:" title="<?php echo e(translate('messages.categories')); ?>">
                            <i class="tio-category nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(translate('messages.categories')); ?></span>
                        </a>
                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub"  style="display:<?php echo e(Request::is('admin/category*') ? 'block' : 'none'); ?>">
                            <li class="nav-item <?php echo e(Request::is('admin/category/add') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.category.add')); ?>" title="<?php echo e(translate('messages.category')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate"><?php echo e(translate('messages.category')); ?></span>
                                </a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('admin/category/add-sub-category') ? 'active' : ''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.category.add-sub-category')); ?>" title="<?php echo e(translate('messages.sub_category')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate"><?php echo e(translate('messages.sub_category')); ?></span>
                                </a>
                            </li>

                            
                        <li class="nav-item <?php echo e(Request::is('admin/category/bulk-import') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.category.bulk-import')); ?>" title="<?php echo e(translate('messages.bulk_import')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_import')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/category/bulk-export') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.category.bulk-export-index')); ?>" title="<?php echo e(translate('messages.bulk_export')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_export')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!-- End Category -->

                <!-- Attributes -->
                
                <!-- End Attributes -->

                <!-- Unit -->
                
                <!-- End Unit -->

                <!-- AddOn -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('addon')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/addon*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:" title="<?php echo e(translate('messages.addons')); ?>">
                        <i class="tio-add-circle-outlined nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(translate('messages.addons')); ?></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display:<?php echo e(Request::is('admin/addon*') ? 'block' : 'none'); ?>">
                        <li class="nav-item <?php echo e(Request::is('admin/addon/add-new') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.addon.add-new')); ?>" title="<?php echo e(translate('messages.addon')); ?> <?php echo e(translate('messages.list')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.list')); ?></span>
                            </a>
                        </li>

                        <li class="nav-item <?php echo e(Request::is('admin/addon/bulk-import') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.addon.bulk-import')); ?>" title="<?php echo e(translate('messages.bulk_import')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_import')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/addon/bulk-export') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.addon.bulk-export-index')); ?>" title="<?php echo e(translate('messages.bulk_export')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_export')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!-- End AddOn -->
                <!-- Food -->
                <?php if(\App\CentralLogics\Helpers::module_permission_check('item')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/item*') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:" title="<?php echo e(translate('Food Setup')); ?>">
                        <i class="tio-premium-outlined nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate text-capitalize"><?php echo e(translate('Food Setup')); ?></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display:<?php echo e(Request::is('admin/item*') ? 'block' : 'none'); ?>">
                        <li class="nav-item <?php echo e(Request::is('admin/item/add-new') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.item.add-new')); ?>" title="<?php echo e(translate('messages.add')); ?> <?php echo e(translate('messages.new')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.add')); ?>

                                    <?php echo e(translate('messages.new')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/item/list') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.item.list')); ?>" title="<?php echo e(translate('messages.food')); ?> <?php echo e(translate('messages.list')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.list')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/item/reviews') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.item.reviews')); ?>" title="<?php echo e(translate('messages.review')); ?> <?php echo e(translate('messages.list')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate"><?php echo e(translate('messages.review')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/item/bulk-import') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.item.bulk-import')); ?>" title="<?php echo e(translate('messages.bulk_import')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_import')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('admin/item/bulk-export') ? 'active' : ''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.item.bulk-export-index')); ?>" title="<?php echo e(translate('messages.bulk_export')); ?>">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_export')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!-- End Food -->

                <!-- Store Store -->
                <li class="nav-item">
                    <small class="nav-subtitle" title="<?php echo e(translate('messages.restaurant')); ?> <?php echo e(translate('messages.section')); ?>"><?php echo e(translate('messages.restaurant')); ?>

                        <?php echo e(translate('messages.management')); ?></small>
                    <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <?php if(\App\CentralLogics\Helpers::module_permission_check('store')): ?>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/store/pending-requests') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.store.pending-requests')); ?>" title="<?php echo e(translate('messages.new_restaurants')); ?>">
                        <span class="tio-calendar-note nav-icon"></span>
                        <span class="text-truncate position-relative overflow-visible">
                            <?php echo e(translate('messages.new_restaurants')); ?>

                            <?php ($new_str = \App\Models\Store::whereHas('vendor', function($query){
                                return $query->where('status', null);
                            })->module(Config::get('module.current_module_id'))->get()); ?>
                            <?php if(count($new_str)>0): ?>
                                
                            <span class="btn-status btn-status-danger border-0 size-8px"></span>
                            <?php endif; ?>
                        </span>
                    </a>
                </li>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/store/add') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.store.add')); ?>" title="<?php echo e(translate('add new restaurant')); ?>">
                        <span class="tio-add-circle nav-icon"></span>
                        <span class="text-truncate position-relative overflow-visible">
                            <?php echo e(translate('add new restaurant')); ?>

                        </span>
                    </a>
                </li>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/store/list') ? 'active' : ''); ?>">
                    <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo e(route('admin.store.list')); ?>" title="<?php echo e(translate('messages.restaurants')); ?> <?php echo e(translate('messages.list')); ?>">
                        <span class="tio-layout nav-icon"></span>
                        <span class="text-truncate"><?php echo e(translate('messages.restaurants')); ?>

                            <?php echo e(translate('list')); ?></span>
                    </a>
                </li>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/store/bulk-import') ? 'active' : ''); ?>">
                    <a class="nav-link " href="<?php echo e(route('admin.store.bulk-import')); ?>" title="<?php echo e(translate('messages.bulk_import')); ?>">
                        <span class="tio-publish nav-icon"></span>
                        <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_import')); ?></span>
                    </a>
                </li>
                <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/store/bulk-export') ? 'active' : ''); ?>">
                    <a class="nav-link " href="<?php echo e(route('admin.store.bulk-export-index')); ?>" title="<?php echo e(translate('messages.bulk_export')); ?>">
                        <span class="tio-download-to nav-icon"></span>
                        <span class="text-truncate text-capitalize"><?php echo e(translate('messages.bulk_export')); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- End Store -->

                <li class="nav-item py-5">

                </li>


                <li class="__sidebar-hs-unfold px-2">
                    <div class="hs-unfold w-100">
                        <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                            data-hs-unfold-options='{
                                    "target": "#accountNavbarDropdown",
                                    "type": "css-animation"
                                }'>
                            <div class="cmn--media right-dropdown-icon d-flex align-items-center">
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img"
                                        onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img1.jpg')); ?>'"
                                        src="<?php echo e(asset('storage/app/public/admin')); ?>/<?php echo e(auth('admin')->user()->image); ?>"
                                        alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <span class="card-title h5">
                                        <?php echo e(auth('admin')->user()->f_name); ?>

                                        <?php echo e(auth('admin')->user()->l_name); ?>

                                    </span>
                                    <span class="card-text"><?php echo e(auth('admin')->user()->email); ?></span>
                                </div>
                            </div>
                        </a>

                        <div id="accountNavbarDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account min--240">
                            <div class="dropdown-item-text">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-sm avatar-circle mr-2">
                                        <img class="avatar-img"
                                                onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img1.jpg')); ?>'"
                                                src="<?php echo e(asset('storage/app/public/admin')); ?>/<?php echo e(auth('admin')->user()->image); ?>"
                                                alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <span class="card-title h5"><?php echo e(auth('admin')->user()->f_name); ?></span>
                                        <span class="card-text"><?php echo e(auth('admin')->user()->email); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">
                                <span class="text-truncate pr-2" title="Settings"><?php echo e(translate('messages.settings')); ?></span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                title: '<?php echo e(translate("logout_warning_message")); ?>',
                                showDenyButton: true,
                                showCancelButton: true,
                                confirmButtonColor: '#FC6A57',
                                cancelButtonColor: '#363636',
                                confirmButtonText: `Yes`,
                                denyButtonText: `Don't Logout`,
                                }).then((result) => {
                                if (result.value) {
                                location.href='<?php echo e(route('admin.auth.logout')); ?>';
                                } else{
                                Swal.fire('<?php echo e(translate('messages.canceled')); ?>', '', 'info')
                                }
                                })">
                                <span class="text-truncate pr-2" title="Sign out"><?php echo e(translate('messages.sign_out')); ?></span>
                            </a>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            <!-- End Content -->
        </div>
    </aside>
</div>

<div id="sidebarCompact" class="d-none">

</div>


<?php $__env->startPush('script_2'); ?>
<script>
    $(window).on('load' , function() {
        if($(".navbar-vertical-content li.active").length) {
            $('.navbar-vertical-content').animate({
                scrollTop: $(".navbar-vertical-content li.active").offset().top - 150
            }, 10);
        }
    });

    var $rows = $('#navbar-vertical-content li');
    $('#search-sidebar-menu').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/layouts/admin/partials/_sidebar_food.blade.php ENDPATH**/ ?>