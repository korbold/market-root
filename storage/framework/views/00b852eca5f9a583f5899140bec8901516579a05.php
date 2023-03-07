<!DOCTYPE html>
<?php ($site_direction = \App\Models\BusinessSetting::where('key', 'site_direction')->first()); ?>
<?php ($site_direction = $site_direction->value ?? 'ltr'); ?>
<html dir="<?php echo e($site_direction); ?>" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="<?php echo e($site_direction === 'rtl'?'active':''); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" id="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon -->
    <?php ($logo=\App\Models\BusinessSetting::where(['key'=>'icon'])->first()->value); ?>
    <link rel="shortcut icon" href="">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('storage/app/public/business/'.$logo??'')); ?>">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/vendor.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/vendor/icon-set/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/custom.css')); ?>">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/theme.minc619.css?v=1.0')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/bootstrap-tour-standalone.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin/css/style.css')); ?>">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>

    <script
        src="<?php echo e(asset('public/assets/admin')); ?>/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/admin')); ?>/css/toastr.css">
</head>

<body class="footer-offset">
    <?php if(env('APP_MODE')=='demo'): ?>
    <div class="direction-toggle">
        <i class="tio-settings"></i>
        <span></span>
    </div>  
    <?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="loading" class="initial-hidden">
                <div class="loader--inner">
                    <img width="200" src="<?php echo e(asset('public/assets/admin/img/loader.gif')); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!isset($module_type)): ?>   
<?php ($module_type = Config::get('module.current_module_type')); ?>
<?php endif; ?>
<!-- Builder -->
<?php echo $__env->make('layouts.admin.partials._front-settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Builder -->

<!-- JS Preview mode only -->
<?php echo $__env->make('layouts.admin.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make("layouts.admin.partials._sidebar_{$module_type}", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- END ONLY DEV -->

<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
<?php echo $__env->yieldContent('content'); ?>
<!-- End Content -->

    <!-- Footer -->
<?php echo $__env->make('layouts.admin.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Footer -->

    <div class="modal fade" id="popup-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <center>
                                <h2>
                                    <i class="tio-shopping-cart-outlined"></i> <?php echo e(translate('messages.You have new order, Check Please.')); ?>

                                </h2>
                                <hr>
                                <button onclick="check_order()" class="btn btn-primary"><?php echo e(translate('messages.Ok, let me check')); ?></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== END SECONDARY CONTENTS ========== -->
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/custom.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<!-- JS Implementing Plugins -->

<?php echo $__env->yieldPushContent('script'); ?>
<!-- JS Front -->
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/vendor.min.js"></script>
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/sweet_alert.js"></script>
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/bootstrap-tour-standalone.min.js"></script>
<script src="<?php echo e(asset('public/assets/admin')); ?>/js/toastr.js"></script>
<?php echo Toastr::message(); ?>


<?php if($errors->any()): ?>
    <script>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error('<?php echo e($error); ?>', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
                .on('shown.bs.popover', function () {
                    $('.popover').last().addClass('popover-dark')
                });

            $(document).on('click', '#closeBuilderPopover', function () {
                window.localStorage.setItem('hs-builder-popover', true);
                $('#builderPopover').popover('dispose');
            });
        } else {
            $('#builderPopover').on('show.bs.popover', function () {
                return false
            });
        }
        // END ONLY DEV
        // =======================================================

        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({boundary: 'window'})

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });


        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function () {
            var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
    });
</script>

<?php echo $__env->yieldPushContent('script_2'); ?>

<script>
    <?php ($modules = \App\Models\Module::Active()->get()); ?>
    var tour = new Tour({
        backdrop: true,
        delay: true,
        redirect: true,
        name:'tour',
        steps: [
            {
                element: "#tourb-0",
                title: "Module",
                placement: 'right',
                content: "From here you can switch to multiple modules."
            },
            {
                element: "#tourb-1",
                title: "Module Selection",
                content: "You can select a module from here.",
                onNext: function(){
                    document.location.href = "<?php echo e(route('admin.dashboard')); ?>?module_id=<?php echo e(count($modules)>0?$modules[0]->id:1); ?>";
                } 
            },
            {
                element: "#navbar-vertical-content",
                title: "Module Sidebar",
                content: "This is the module wise sidebar."
            },
            {
                element: "#tourb-3",
                title: "Settings",
                content: "From here you can go to settings option."
            },
            {
                element: "#tourb-4",
                title: "Settings Menu",
                content: "From here you can select any settings option.",   
                onNext: function(){
                    document.location.href = "<?php echo e(route('admin.business-settings.business-setup')); ?>";
                } 
            },
            {
                element: "#navbar-vertical-content",
                title: "Settings Sidebar",
                content: "This is the settings sidebar. Different from module",
            },
            {
                element: "#tourb-6",
                title: "User Section",
                content: "You can manage all the users by selecting this option.",
            },
            {
                element: "#tourb-7",
                title: "Transaction and Report",
                content: "You can manage all the Transaction and Report by selecting this option."
            },
            {
                element: "#tourb-8",
                title: "Dispatch Management",
                content: "You can manage all dispatch orders by selecting this option."
            },
            {
                element: "#tourb-9",
                title: "Profile and Logout",
                content: "You can visit your profile or logut from this panel.",
                placement:'top'
            }
        ],
        onEnd: function() {
            $('body').css('overflow','')
        },
        onShow: function() {
            $('body').css('overflow','hidden')
        }
    });

    // Initialize the tour
    tour.init();


    
    <?php if(isset($modules) && ($modules->count()>0)): ?>
        // Start the tour
        tour.start();
        // $('body').css('overflow','hidden')
    <?php endif; ?>

    function restartTour() {
        <?php if(isset($modules) && ($modules->count()>0)): ?>
            // Start the tour
            tour.restart();
            $('body').css('overflow','hidden')
        <?php endif; ?>
    }


    
</script>
<audio id="myAudio">
    <source src="<?php echo e(asset('public/assets/admin/sound/notification.mp3')); ?>" type="audio/mpeg">
</audio>

<script>
    var audio = document.getElementById("myAudio");

    function playAudio() {
        audio.play();
    }

    function pauseAudio() {
        audio.pause();
    }
</script>
<script>
    function route_alert(route, message, title="<?php echo e(translate('messages.are_you_sure')); ?>") {
        Swal.fire({
            title: title,
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#FC6A57',
            cancelButtonText: '<?php echo e(translate('messages.no')); ?>',
            confirmButtonText: '<?php echo e(translate('messages.Yes')); ?>',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                location.href = route;
            }
        })
    }

    function form_alert(id, message) {
        Swal.fire({
            title: '<?php echo e(translate('messages.Are you sure?')); ?>',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#FC6A57',
            cancelButtonText: '<?php echo e(translate('messages.no')); ?>',
            confirmButtonText: '<?php echo e(translate('messages.Yes')); ?>',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#'+id).submit()
            }
        })
    }
    function set_zone_filter(url, id) {
        var nurl = new URL(url);
        nurl.searchParams.set('zone_id', id);

        location.href = nurl;
    }

    function set_store_filter(url, id) {
        var nurl = new URL(url);
        nurl.searchParams.set('store_id', id);
        location.href = nurl;
    }
    function set_category_filter(url, id) {
        var nurl = new URL(url);
        nurl.searchParams.set('category_id', id);
        location.href = nurl;
    }

    function set_time_filter(url, id) {
        var nurl = new URL(url);
        nurl.searchParams.set('filter', id);
        location.href = nurl;
    }

    function set_customer_filter(url, id) {
        var nurl = new URL(url);
        nurl.searchParams.set('customer_id', id);
        location.href = nurl;
    }


    function set_filter(url, id, filter_by) {
        var nurl = new URL(url);
        nurl.searchParams.set(filter_by, id);
        location.href = nurl;
        tour.next();
    }
    function next_tour() {
        tour.next();
    }

    function copy_text(copyText) {
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText);

        toastr.success('<?php echo e(translate('messages.text_copied')); ?>', {
            CloseButton: true,
            ProgressBar: true
        });
    }
</script>
<script>

    $(document).on('ready', function(){
        // $('body').css('overflow','')
        $(".direction-toggle").on("click", function () {
            if($('html').hasClass('active')){
                $('html').removeClass('active')
                setDirection(1);
            }else {
                setDirection(0);
                $('html').addClass('active')
            }
        });
        if ($('html').attr('dir') == "rtl") {
            $(".direction-toggle").find('span').text('Toggle LTR')
        } else {
            $(".direction-toggle").find('span').text('Toggle RTL')
        }

        function setDirection(status) {
            if (status == 1) {
                $("html").attr('dir', 'ltr');
                $(".direction-toggle").find('span').text('Toggle RTL')
            } else {
                $("html").attr('dir', 'rtl');
                $(".direction-toggle").find('span').text('Toggle LTR')
            }
            $.get({
                    url: '<?php echo e(route('admin.business-settings.site_direction')); ?>',
                    dataType: 'json',
                    data: {
                        status: status,
                    },
                    success: function() {
                        alert(ok);
                    },

                });
            }
        });

</script>
<script>
    <?php ($fcm_credentials = \App\CentralLogics\Helpers::get_business_settings('fcm_credentials')); ?>
    var firebaseConfig = {
        apiKey: "<?php echo e(isset($fcm_credentials['apiKey']) ? $fcm_credentials['apiKey'] : ''); ?>",
        authDomain: "<?php echo e(isset($fcm_credentials['authDomain']) ? $fcm_credentials['authDomain'] : ''); ?>",
        projectId: "<?php echo e(isset($fcm_credentials['projectId']) ? $fcm_credentials['projectId'] : ''); ?>",
        storageBucket: "<?php echo e(isset($fcm_credentials['storageBucket']) ? $fcm_credentials['storageBucket'] : ''); ?>",
        messagingSenderId: "<?php echo e(isset($fcm_credentials['messagingSenderId']) ? $fcm_credentials['messagingSenderId'] : ''); ?>",
        appId: "<?php echo e(isset($fcm_credentials['appId']) ? $fcm_credentials['appId'] : ''); ?>",
        measurementId: "<?php echo e(isset($fcm_credentials['measurementId']) ? $fcm_credentials['measurementId'] : ''); ?>"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function startFCM() {

        messaging
            .requestPermission()
            .then(function() {
                return messaging.getToken()
            })
            .then(function(response) {
                subscribeTokenToTopic(response, 'admin_message');
                console.log('subscribed');
            }).catch(function(error) {
                console.log(error);
            });
    }
    <?php ($key = \App\Models\BusinessSetting::where('key', 'push_notification_key')->first()); ?>

    function subscribeTokenToTopic(token, topic) {
        fetch('https://iid.googleapis.com/iid/v1/' + token + '/rel/topics/' + topic, {
            method: 'POST',
            headers: new Headers({
                'Authorization': 'key=<?php echo e($key ? $key->value : ''); ?>'
            })
        }).then(response => {
            if (response.status < 200 || response.status >= 400) {
                throw 'Error subscribing to topic: ' + response.status + ' - ' + response.text();
            }
            console.log('Subscribed to "' + topic + '"');
        }).catch(error => {
            console.error(error);
        })
    }

    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }

    function conversationList() {
        $.ajax({
                url: "<?php echo e(route('admin.message.list')); ?>",
                success: function(data) {
                    $('#conversation-list').empty();
                    $("#conversation-list").append(data.html);
                    var user_id = getUrlParameter('user');
                $('.customer-list').removeClass('conv-active');
                $('#customer-' + user_id).addClass('conv-active');
                }
            })
    }

    function conversationView() {
        var conversation_id = getUrlParameter('conversation');
        var user_id = getUrlParameter('user');
        var url= '<?php echo e(url('/')); ?>/admin/message/view/'+conversation_id+'/' + user_id;
        $.ajax({
            url: url,
            success: function(data) {
                $('#view-conversation').html(data.view);
            }
        })
    }



    function vendorConversationView() {
        var conversation_id = getUrlParameter('conversation');
        var user_id = getUrlParameter('user');
        var url= '<?php echo e(url('/')); ?>/admin/store/message/'+conversation_id+'/' + user_id;
        $.ajax({
            url: url,
            success: function(data) {
                $('#vendor-view-conversation').html(data.view);
            }
        })
    }

    function dmConversationView() {
        var conversation_id = getUrlParameter('conversation');
        var user_id = getUrlParameter('user');
        var url= '<?php echo e(url('/')); ?>/admin/delivery-man/message/'+conversation_id+'/' + user_id;
        $.ajax({
            url: url,
            success: function(data) {
                $('#dm-view-conversation').html(data.view);
            }
        })
    }

    var new_order_type='store_order';
    var new_module_id=null;

    messaging.onMessage(function(payload) {
        console.log(payload.data);
        if(payload.data.order_id && payload.data.type == "order_request"){
                <?php ($admin_order_notification = \App\Models\BusinessSetting::where('key', 'admin_order_notification')->first()); ?>
                <?php ($admin_order_notification = $admin_order_notification ? $admin_order_notification->value : 0); ?>
                <?php if(\App\CentralLogics\Helpers::module_permission_check('order') && $admin_order_notification): ?>
                new_order_type = payload.data.order_type
                new_module_id = payload.data.module_id
                playAudio();
                $('#popup-modal').appendTo("body").modal('show');
                <?php endif; ?>
        }else{
            var conversation_id = getUrlParameter('conversation');
            var user_id = getUrlParameter('user');
            var url= '<?php echo e(url('/')); ?>/admin/message/view/'+conversation_id+'/' + user_id;
            console.log(url);
            $.ajax({
                url: url,
                success: function(data) {
                    $('#view-conversation').html(data.view);
                }
            })
            toastr.success('New message arrived', {
                CloseButton: true,
                ProgressBar: true
            });
            if($('#conversation-list').scrollTop() == 0){
                conversationList();
            }
        }
    });

    function check_order() {
            if(new_order_type == 'parcel')
            {
                var url= '<?php echo e(url('/')); ?>/admin/parcel/orders/all?module_id=' + new_module_id;
                location.href = url;
            }
            else
            {
                var url= '<?php echo e(url('/')); ?>/admin/order/list/all?module_id=' + new_module_id;
                location.href = url;
            }

        }

    startFCM();
    conversationList();
    if(getUrlParameter('conversation')){
        conversationView();
        vendorConversationView();
        dmConversationView();
    }
</script>

<script>
    function call_demo(){
        toastr.info('<?php echo e(translate('Update option is disabled for demo!')); ?>', {
            CloseButton: true,
            ProgressBar: true
        });
    }
</script>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo e(asset('public/assets/admin')); ?>/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/layouts/admin/app.blade.php ENDPATH**/ ?>