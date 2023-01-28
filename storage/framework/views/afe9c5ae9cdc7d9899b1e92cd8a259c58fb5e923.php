<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startPush('styles'); ?>
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="../../../template/app-assets/css-rtl/pages/users.css">
        <!-- END Page Level CSS-->
    <?php $__env->stopPush(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">لوحة التحكم</a>
                    </li>
                    <li class="breadcrumb-item active">ادارة الاسر
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">ادارة الاسر</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                
                <div class="py-2" aria-labelledby="btnGroupDrop1">
                    <a class="" href="<?php echo e(route('family.create')); ?>">اضافة أ سره جديده</a>
                    
                </div>
                
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <?php if(session()->has('message')): ?>
        <div class="alert alert-info">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('families-list')->html();
} elseif ($_instance->childHasBeenRendered('sTCI5Wz')) {
    $componentId = $_instance->getRenderedChildComponentId('sTCI5Wz');
    $componentTag = $_instance->getRenderedChildComponentTagName('sTCI5Wz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sTCI5Wz');
} else {
    $response = \Livewire\Livewire::mount('families-list');
    $html = $response->html();
    $_instance->logRenderedChild('sTCI5Wz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

    <?php $__env->startPush('scripts'); ?>
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/families/index.blade.php ENDPATH**/ ?>