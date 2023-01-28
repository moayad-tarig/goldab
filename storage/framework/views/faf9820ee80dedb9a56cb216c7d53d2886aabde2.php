
<section id="user-cards-with-square-thumbnail" class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            
                <div class="card-body">

                    <div class="form-group">
                        <input type="search" wire:model="searchText" placeholder="بحث" class="form-control">
                    </div>
                </div>
            
        </div>
    </div>
    <?php if(count($data) > 0): ?>
    
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-md-6 col-12">
                
                <div class="card box-shadow-1">
                    <div class="text-center">
                        <div class="card-body">
                            <?php if($item->photo): ?>
                                <img src="<?php echo e(asset($item->photo)); ?>" class="rounded-circle  height-150" alt="Card image">
                            <?php else: ?>
                                <img src="../../../template/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150" alt="Card image">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                الاسم : <?php echo e($item->name); ?>

                            </h4>
                            <?php if($item->family): ?>
                            <h6 class="card-subtitle">
                                الاب : <?php echo e($item->family->father->name ?? null); ?> <br>
                                الام : <?php echo e($item->family->mother->name ?? null); ?>

                            </h6>
                            <?php endif; ?>
                        </div>
                        <div x-data="" class="text-center">
                            <button @click="x = confirm(`هل انت متاكد ؟`); if(x){ $wire.delete(<?php echo e($item->id); ?>) }" class="btn btn-social-icon mr-1 mb-1 btn-outline-danger">
                            <span class="la la-trash"></span>
                            </button>
                            <a href="<?php echo e(route('person.edit', $item->id)); ?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-primary">
                            <span class="la la-edit"></span>
                            </a>
                            <a href="<?php echo e(route('person.show', $item->id)); ?>" class="btn btn-social-icon mb-1 btn-outline-warning">
                            <span class="la la-eye font-medium-4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="text-center">
                <h3>لا توجد بيانات</h3>
            </div>
            <?php endif; ?>
            <div class="col-12 mb-4">
                
                <div style="display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-around;">
                    <?php echo e($data->links()); ?>

                </div>
            </div>
        </section>
    <?php /**PATH C:\laragon\www\family-tree\resources\views/livewire/people-list.blade.php ENDPATH**/ ?>