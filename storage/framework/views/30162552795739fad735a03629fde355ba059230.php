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
                    <li class="breadcrumb-item active">ادارة الافراد
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">ادارة الافراد</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ft-settings icon-left"></i> الخيارات
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="<?php echo e(route('person.create')); ?>">اضافة فرد جديده</a>
                    <a class="dropdown-item" href="component-buttons-extended.html">Buttons</a>
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
    $html = \Livewire\Livewire::mount('people-list')->html();
} elseif ($_instance->childHasBeenRendered('XdHcXD7')) {
    $componentId = $_instance->getRenderedChildComponentId('XdHcXD7');
    $componentTag = $_instance->getRenderedChildComponentTagName('XdHcXD7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XdHcXD7');
} else {
    $response = \Livewire\Livewire::mount('people-list');
    $html = $response->html();
    $_instance->logRenderedChild('XdHcXD7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/person/index.blade.php ENDPATH**/ ?>