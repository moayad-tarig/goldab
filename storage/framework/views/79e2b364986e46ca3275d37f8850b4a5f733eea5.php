<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startPush('styles'); ?>
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/app-assets/css-rtl/pages/dashboard-ecommerce.css')); ?>">
        <!-- END Page Level CSS-->
    <?php $__env->stopPush(); ?>

     <?php $__env->slot('header', null, []); ?> 
        
     <?php $__env->endSlot(); ?>

    <!-- eCommerce statistic -->
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger"><?php echo e($big_family_name); ?></h3>
                            <h6>اسم العائلة</h6>
                        </div>
                        <div>
                            <i class="icon-heart danger font-large-2 float-right"></i>
                        </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h3 class="warning"><?php echo e($families_count); ?></h3>
                    <h6>عدد الاسر</h6>
                </div>
                <div>
                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info"><?php echo e($people_count); ?></h3>
                            <h6>عدد الافراد</h6>
                        </div>
                        <div>
                            <i class="icon-basket-loaded info font-large-2 float-right"></i>
                        </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--/ eCommerce statistic -->

    <?php $__env->startPush('scripts'); ?>
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="<?php echo e(asset('template/app-assets/js/scripts/pages/dashboard-ecommerce.js')); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/dashboard/index.blade.php ENDPATH**/ ?>