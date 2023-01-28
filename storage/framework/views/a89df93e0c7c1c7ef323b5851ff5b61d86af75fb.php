<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startPush('styles'); ?>
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/app-assets/vendors/css/forms/selects/select2.min.css')); ?>">
        <!-- END Page Level CSS-->
    <?php $__env->stopPush(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">لوحة التحكم</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('person.index')); ?>">ادارة الافراد</a>
                    </li>
                    <li class="breadcrumb-item active"> تفاصيل الافراد
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">تفاصيل الافراد</h3>
        </div>
     <?php $__env->endSlot(); ?>

    <section class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="card border-teal border-lighten-2">
            <div class="text-center">
                <div class="card-body">
                    <?php if($person->photo): ?>
                        <img src="<?php echo e(asset($person->photo)); ?>" class="rounded-circle  height-150" alt="">
                    <?php else: ?>
                        <img src="../../../template/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150 width-100 alt="Card image">
                    <?php endif; ?>
            </div>
                <div class="card-body">
                <h4 class="card-title"><?php echo e($person->name); ?> <?php echo e($person->another_name ? '(' . $person->another_name .')' : ''); ?></h4>
                <h4 class="card-title text-success"><?php echo e($person->is_featured ? '(شخصية مميزة)' : ''); ?></h4>
                <h6 class="card-subtitle text-muted"><?php echo e($person->dateOfBirth); ?></h6>
                </div>
                <div x-data class="text-center">
                    <a href="<?php echo e(route('person.edit', $person->id)); ?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-primary">
                        <span class="la la-edit"></span>
                    </a>
                    <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $refs.destroy_form.submit(); }" class="btn btn-social-icon mr-1 mb-1 btn-outline-danger">
                        <span class="la la-trash"></span>
                    </button>
                    <form x-ref="destroy_form" action="<?php echo e(route('person.destroy', $person->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-6 col-12">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-info">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card box-shadow-1">
                <div class="card-header">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">البيانات الشخصية</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1" aria-expanded="false">الاخوان</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                    <div class="row mt-2">
                                        <div class="col-md-6 ">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  الاب: </strong>
                                                    <span>
                                                        <?php if($person->family): ?>
                                                            <a href="<?php echo e(route('person.show', $person->family->father->id)); ?>"><?php echo e($person->family->father->name); ?></a>
                                                        <?php else: ?>
                                                            ---
                                                        <?php endif; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  الام: </strong>
                                                    <span>
                                                        <?php if($person->family): ?>
                                                            <a href="<?php echo e(route('person.show', $person->family->mother->id)); ?>"><?php echo e($person->family->mother->name); ?></a>
                                                        <?php else: ?>
                                                            ---
                                                        <?php endif; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  مكان السكن: </strong>
                                                    <span> <?php echo e($person->country->name ?? null); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  المدينة: </strong>
                                                    <span> <?php echo e($person->city->name ?? null); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  تاريخ الميلاد: </strong>
                                                    <span> <?php echo e($person->dateOfBirth); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  ملاحظة: </strong>
                                                    <span> <?php echo e($person->note); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3 d-flex align-items-center">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  حاله الوفاه: </strong>
                                                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['badge', 'badge-danger' => $person->is_dead, 'badge-success' => !$person->is_dead]) ?>"> <?php echo e($person->is_dead ? 'متوفي' : 'حي'); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                        <?php if($person->is_dead): ?>
                                        <div class="col-md-9">
                                            <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                <p class="m-0">
                                                    <strong>  تاريخ الوفاة: </strong>
                                                    <span> <?php echo e($person->dateOfDeath ?? null); ?> </span>
                                                </p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card collapse-icon accordion-icon-rotate">
                                                <div id="headingCollapse31" class="card-header bg-success">
                                                <a data-toggle="collapse" href="#collapse31" aria-expanded="true" aria-controls="collapse31" class="card-title lead white">اخوان لاب وام</a>
                                                </div>
                                                <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31" class="card-collapse collapse show" aria-expanded="true">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row mt-2">
                                                            <div  class="col-md-6">
                                                                <div class="d-flex justify-content-center align-items-end">
                                                                    <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  عدد الذكور: </strong>
                                                                            <span> <?php echo e(count($brothers_from_mother_and_father->where('gender', 'male'))); ?> </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                    
                                                                <div x-ref="sons_container" class="mt-2">
                                                                    <?php $__currentLoopData = $brothers_from_mother_and_father->where('gender', 'male'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brother): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  الاخ: </strong>
                                                                            <span> <a href="<?php echo e(route('person.show', $brother->id)); ?>"><?php echo e($brother->name); ?></a> </span>
                                                                        </p>
                                                                    </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="d-flex justify-content-center align-items-end">
                                                                    <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  عدد الاناث: </strong>
                                                                            <span> <?php echo e(count($brothers_from_mother_and_father->where('gender', 'female'))); ?> </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div x-ref="daughters_container" class="mt-2">
                                                                    <?php $__currentLoopData = $brothers_from_mother_and_father->where('gender', 'female'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                        <p class="m-0">
                                                                            <strong>  الاخت: </strong>
                                                                            <span> <a href="<?php echo e(route('person.show', $sister->id)); ?>"><?php echo e($sister->name); ?></a> </span>
                                                                        </p>
                                                                    </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <?php if($brothers_from_father != $brothers_from_mother_and_father): ?>
                                                    <div id="headingCollapse32" class="card-header bg-info">
                                                    <a data-toggle="collapse" href="#collapse32" aria-expanded="false" aria-controls="collapse32" class="card-title lead white collapsed"> الاخوة لاب <Strong>(<?php echo e($person->family->father->name); ?>)</Strong></a>
                                                    </div>
                                                    <div id="collapse32" role="tabpanel" aria-labelledby="headingCollapse32" class="card-collapse collapse" aria-expanded="false">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row mt-2">
                                                                <div  class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الذكور: </strong>
                                                                                <span> <?php echo e(count($brothers_from_father->where('gender', 'male'))); ?> </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div x-ref="sons_container" class="mt-2">
                                                                        <?php $__currentLoopData = $brothers_from_father->where('gender', 'male'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brother): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخ: </strong>
                                                                                <span> <a href="<?php echo e(route('person.show', $brother->id)); ?>"><?php echo e($brother->name); ?></a> </span>
                                                                            </p>
                                                                        </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الاناث: </strong>
                                                                                <span> <?php echo e(count($brothers_from_father->where('gender', 'female'))); ?> </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div x-ref="daughters_container" class="mt-2">
                                                                        <?php $__currentLoopData = $brothers_from_father->where('gender', 'female'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخت: </strong>
                                                                                <span> <a href="<?php echo e(route('person.show', $sister->id)); ?>"><?php echo e($sister->name); ?></a> </span>
                                                                            </p>
                                                                        </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($brothers_from_mother != $brothers_from_mother_and_father): ?>
                                                    <div id="headingCollapse33" class="card-header bg-danger">
                                                    <a data-toggle="collapse" href="#collapse33" aria-expanded="false" aria-controls="collapse33" class="card-title lead white collapsed"> الاخوة لام <Strong>(<?php echo e($person->family->mother->name); ?>)</Strong></a>
                                                    </div>
                                                    <div id="collapse33" role="tabpanel" aria-labelledby="headingCollapse33" class="card-collapse collapse" aria-expanded="false">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row mt-2">
                                                                <div  class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الذكور: </strong>
                                                                                <span> <?php echo e(count($brothers_from_mother->where('gender', 'male'))); ?> </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div x-ref="sons_container" class="mt-2">
                                                                        <?php $__currentLoopData = $brothers_from_mother->where('gender', 'male'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brother): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخ: </strong>
                                                                                <span> <a href="<?php echo e(route('person.show', $brother->id)); ?>"><?php echo e($brother->name); ?></a> </span>
                                                                            </p>
                                                                        </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="d-flex justify-content-center align-items-end">
                                                                        <div class="striped w-70 p-1" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  عدد الاناث: </strong>
                                                                                <span> <?php echo e(count($brothers_from_mother->where('gender', 'female'))); ?> </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div x-ref="daughters_container" class="mt-2">
                                                                        <?php $__currentLoopData = $brothers_from_mother->where('gender', 'female'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="striped w-70 p-1 mt-2" style="border: 1px dashed #ccc;">
                                                                            <p class="m-0">
                                                                                <strong>  الاخت: </strong>
                                                                                <span> <a href="<?php echo e(route('person.show', $sister->id)); ?>"><?php echo e($sister->name); ?></a> </span>
                                                                            </p>
                                                                        </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <?php endif; ?>                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    

    <?php $__env->startPush('scripts'); ?>
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="<?php echo e(asset('template/app-assets/vendors/js/forms/select/select2.full.min.js')); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/person/show.blade.php ENDPATH**/ ?>