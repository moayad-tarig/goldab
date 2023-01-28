



<section class="row">


    <div class="col-sm-12">
        <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <input type="search" wire:model="searchText" placeholder="بحث" class="form-control">
                    </div>
                </div>
        </div>
    </div>

    
    
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                        <?php if(count($data) > 0): ?>
                        <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاب</th>
                                    <th>الام</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($item->id); ?>

                                    </td>
                                    <td>
                                        <div class="media">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                            <img src="<?php echo e(asset('template/app-assets/images/portrait/small/avatar-s-2.png')); ?>" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#" class="media-heading"><?php echo e($item->father->name); ?></a>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                            <img src="<?php echo e(asset('template/app-assets/images/portrait/small/avatar-s-2.png')); ?>" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#" class="media-heading"><?php echo e($item->mother->name); ?></a>
                                        </div>
                                        </div>
                                    </td>
                                    <td x-data="">
                                        <a href="<?php echo e(route('family.show', $item->id)); ?>" class="btn btn-sm btn-social-icon mr-1 btn-outline-warning">
                                            <span class="la la-eye font-medium-4"></span>
                                        </a>
                                        <a href="<?php echo e(route('family.edit', $item->id)); ?>" class="btn btn-sm btn-social-icon mr-1 btn-outline-primary">
                                            <span class="la la-edit"></span>
                                        </a>
                                        <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $wire.delete(<?php echo e($item->id); ?>) }" class="btn btn-sm btn-social-icon  btn-outline-danger">
                                            <span class="la la-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>الاب</th>
                                    <th>الام</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </tfoot>
                        </table>
                        <?php else: ?>
                            <div class="text-center">
                                <h3>لا توجد بيانات</h3>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div style="display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;">
            <?php echo e($data->links()); ?>

        </div>
    </div>
</section><?php /**PATH C:\laragon\www\family-tree\resources\views/livewire/families-list.blade.php ENDPATH**/ ?>