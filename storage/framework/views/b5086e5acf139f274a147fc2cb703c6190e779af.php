<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                        
                        <h2>تسجيل الدخول لصفحة الإدارة</h2>
                        </div>
                    </div>
                    
                    </div>
                    <div class="card-content">
                    
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                        <span>قم بادخال بيانات الحساب</span>
                    </p>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="<?php echo e(route('login.post')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="user-name">الايميل</label>
                            <input type="text" class="form-control" name="email" id="user-name" placeholder="admin@example.com">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group mb-1">
                            <label for="user-password">كلمة السر</label>
                            <input type="password" class="form-control" name="password" id="user-password" placeholder="****">
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-md-6 col-12 text-center text-sm-left">
                            
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> دخول</button>
                        </form>
                    </div>
                    
                    
                    </div>
                </div>
                </div>
            </div>
        </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/auth/login.blade.php ENDPATH**/ ?>