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
                    <?php if(!request()->routeIs('person.edit')): ?>
                        <li class="breadcrumb-item active"> اضافة
                        </li>
                    <?php else: ?>
                        <li class="breadcrumb-item active"> تعديل
                        </li>
                    <?php endif; ?>
                </ol>
                </div>
            </div>
            <?php if(!request()->routeIs('person.edit')): ?>
                <h3 class="content-header-title mb-0">اضافه فرد جديد</h3>
            <?php else: ?>
                <h3 class="content-header-title mb-0">تعديل فرد</h3>
            <?php endif; ?>
        </div>
        <div class="content-header-right col-md-6 col-12">
            
        </div>
     <?php $__env->endSlot(); ?>

    

        <section class="row">
            <div class="col-md-12">

                <?php echo $__env->make('backend.layout.alerts.validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card">
                    <div class="card-header">
                        <?php if(!request()->routeIs('person.edit')): ?>
                            <h4 class="card-title">
                                اضافه فرد
                            </h4>
                        <?php else: ?>
                            <h4 class="card-title">
                                <?php echo e($person->name); ?>

                            </h4>
                        <?php endif; ?>

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php if(!request()->routeIs('person.edit')): ?>
                            
                            <form action="<?php echo e(route('person.store')); ?>" method="POST" enctype="multipart/form-data" class="form">
                            <?php else: ?>
                            <form action="<?php echo e(route('person.update', $person->id)); ?>" method="POST" enctype="multipart/form-data" class="form">
                            <?php echo method_field('PUT'); ?>
                            <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                <div class="form-body">
                                    <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                        <li class="nav-item">
                                        <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">البيانات الشخصية</a>
                                        </li>
                                    </ul>
                                    <div x-data="{
                                        is_dead: false,
                                        cities: [],
                                        async getCountryCities(country_id){
                                            console.log(country_id)
                                            if (country_id) {
                                                console.log('<?php echo e(route('getCountryCities')); ?>' + '/?country_id=' + country_id)
                                                this.cities = await (await fetch('<?php echo e(route('getCountryCities')); ?>' + '/?country_id=' + country_id)).json();
                                    
                                                // log out all the posts to the console
                                                console.log(this.cities);
                                            }else{
                                                this.cities = [];
                                            }
                                        }
                                    }" class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="">الاسم الكامل</label>
                                                        <input class="form-control" type="text" value="<?php echo e($person->name ?? null); ?>" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">اللقب</label>
                                                        <input class="form-control" type="text" value="<?php echo e($person->another_name ?? null); ?>" name="another_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">مكان السكن</label>
                                                        <select @change="getCountryCities($($el).val())" type="text" class="form-control" name="country_id" >
                                                            <option value=""></option>
                                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($country->id); ?>" <?php echo e(($person->country_id ?? null) == $country->id ? 'selected' : ''); ?>><?php echo e($country->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php if(!request()->routeIs('person.edit')): ?>
                                                    
                                                    <div class="form-group">
                                                        <label for="companyName">المدينة</label>
                                                        <select class="form-control" name="city_id">
                                                            <option value=""></option>
                                                            <template x-for="city in cities">
                                                                <option :value="city.id" x-text="city.name"></option>
                                                            </template>
                                                        </select>
                                                    </div>
                                                    <?php else: ?>
                                                    
                                                    <div class="form-group">
                                                        <label for="companyName">المدينة</label>
                                                        <select type="text" class="form-control" name="city_id" >
                                                            <option value=""></option>
                                                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($city->id); ?>" <?php echo e(($person->city_id ?? null) == $city->id ? 'selected' : ''); ?>><?php echo e($city->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الميلاد</label>
                                                        <input type="date" class="form-control" name="dateOfBirth" value="<?php echo e($person->dateOfBirth ?? null); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">النوع</label><br>
                                                        <span><input type="radio" class="radio" name="gender" value="male" <?php echo e(($person->gender ?? null) == 'male' ? 'checked' : ''); ?>> ذكر</span> 
                                                        <span class="m-3"><input type="radio" class="radio" name="gender" value="female" <?php echo e(($person->gender ?? null) == 'female' ? 'checked' : ''); ?>> انثى</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">ملاحظة</label>
                                                        <textarea id="" rows="5" class="form-control" name="note"><?php echo e($person->note ?? null); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="">الصورة الشخصية</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="photo">
                                                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" x-init="$el.checked = <?php echo e($person->is_dead ?? null); ?>; is_dead = <?php echo e($person->is_dead ?? null); ?>" @change=" is_dead = $el.checked"  class="checkbox mr-1" name="is_dead">
                                                        <label for="companyName">متوفي ؟</label>
                                                    </div>
                                                </div>
                                                <div x-show="is_dead" x-transition class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الوفاة</label>
                                                        <input type="date" value="<?php echo e($person->dateOfDeath ?? null); ?>" class="form-control" name="dateOfDeath">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" <?php echo e(($person->is_featured ?? null) == '1' ? 'checked' : ''); ?>  class="checkbox mr-1" name="is_featured">
                                                        <label for=""> شخصية مميزة ؟</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <?php if(!request()->routeIs('person.edit')): ?>
                                    <button class="btn btn-rounded btn-success">اضافة</button>
                                    <?php else: ?>
                                    <button class="btn btn-rounded btn-success">تعديل</button>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('person.index')); ?>" class="btn btn-rounded btn-secondary">الغاء</a>
                                </div>
                            </form>

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
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/person/form.blade.php ENDPATH**/ ?>