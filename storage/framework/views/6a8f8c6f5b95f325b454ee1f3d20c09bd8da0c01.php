<?php if (isset($component)) { $__componentOriginal427056743380f0127f5c6367fdb385e78ff8dc7a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontLayout::class, []); ?>
<?php $component->withName('front-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'core--lsvr_family_member-single core--narrow core--fullwidth core--darker-bg']); ?>
     <?php $__env->slot('header', null, []); ?> 
        <!-- CORE HEADER INNER : begin -->
					<div class="core-header__inner">
						<div class="lsvr-container">
							<div class="core-header__content">
				
				
				
				
								<!-- BREADCRUMBS : begin -->
								<div class="breadcrumbs">
									<div class="breadcrumbs__inner">
				
				
										<nav class="breadcrumbs__nav" aria-label="Breadcrumbs">
											<ul class="breadcrumbs__list">
				
				
												<li class="breadcrumbs__item">
													<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
													
												</li>
				
				
												<li class="breadcrumbs__item">
													<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
													
													
												</li>
				
				
											</ul>
										</nav>
				
				
				
									</div>
								</div>
								<!-- BREADCRUMBS : end -->
				
				
				
								<!-- CORE HEADER CONTAINER : begin -->
								<div class="core-header__container">
				
									<!-- CORE HEADER HEADING : begin -->
									<div class="core-header__heading">
				
										<h1 class="core-header__title">
                                            شجرة عائلة 
											القولداب </h1>
										
                                            
				
				
									</div>
                                    <div>
                                        <h3 style="color: wheat">
                                            "دابو تمر جبد وشال"
                                        </h3>
                                    </div>
									<!-- CORE HEADER HEADING : end -->
				
									<!-- CORE HEADER PORTRAIT : begin -->
									
									<!-- CORE HEADER PORTRAIT : end -->
				
				
									<!-- CORE HEADER INFO : begin -->
                                    
									<!-- CORE HEADER INFO : begin -->
				
				
								</div>
								<!-- CORE HEADER CONTAINER : end -->
				
				
							</div>
						</div>
					</div>
					<!-- CORE HEADER INNER : end -->
				
				
					<!-- CORE HEADER BACKGROUND : begin -->
					<div class="core-header__bg core-header__bg--loading">
				
						<div class="core-header__bg-image" style="background-image: url( <?php echo e(asset('files/nenad-radojcic-Ukld9OZp6cI-unsplash.jpg')); ?> );background-size: contain;">
							<img src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/header_bg_01_blur.jpg" class="core-header__bg-img" aria-hidden="true" alt="">
						</div>
				
						<div class="core-header__bg-overlay" style="opacity: 0.5"></div>
				
					</div>
					<!-- PAGE BACKGROUND : end -->
     <?php $__env->endSlot(); ?>



    <!-- POST SINGLE : begin -->
    <div class="lsvr_family_member-single">


        <!-- POST : begin -->
        <article class="post post-77 lsvr_family_member type-lsvr_family_member status-publish has-post-thumbnail hentry">
            <div class="post__inner">


                <!-- POST CONTAINER : begin -->
                <div class="post__container">

                    <!-- POST CONTAINER TOGGLE : begin -->
                    <p class="post__container-toggle-wrapper">
                        <button type="button" style="padding-left: 30px;" class="post__container-toggle" aria-controls="post__container-inner" aria-expanded="false" data-label-expand-popup="المعلومات الشخصية" data-label-collapse-popup="اخفاء المعلومات الشخصية">
                            <span class="post__container-toggle-label">معلومات شخصية</span>
                            <!-- <span class="post__container-toggle-icon" aria-hidden="true"></span> -->
                            <i class="la la-arrows-alt la-lg"></i>
                        </button>
                    </p>
                    <!-- POST CONTAINER TOGGLE : end -->

                    <!-- POST CONTAINER INNER : begin -->
                    <div id="post__container-inner" class="post__container-inner" role="group" aria-expanded="false">
                        <div class="lsvr-container">


                            <!-- POST CONTENT : begin -->
                            <!-- <div class="post__content">




                            </div> -->
                            <!-- POST CONTENT : end -->


                            <!-- POST INFO : begin -->
                            <div class="post__info">

                                <!-- POST INFO LIST : begin -->
                                <ul class="post__info-list">

                                    <?php if($person->photo): ?>
                                        
                                    <li class="post__info-item post__info-item--birth-place">
                                        <img src="<?php echo e($person->photo); ?>" alt="">
                                    </li>
                                    <?php else: ?>
                                    <li class="class="post__info-item post__info-item--birth-place">
                                        لا توجد صورة الى الأن
                                    </li>
                                    <?php endif; ?>
                                    <!-- PLACE OF BIRTH : begin -->
                                    <li class="post__info-item post__info-item--birth-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title">الاب</h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            <?php if($person->family): ?>
                                                    <a href="<?php echo e(route('family.member', ['id' => $person->family->father->id])); ?>"><?php echo e($person->family->father->name); ?></a>
                                                <?php else: ?>
                                                    ---
                                                <?php endif; ?> </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- PLACE OF BIRTH : end -->



                                    <!-- PLACE OF DEATH : begin -->
                                    <li class="post__info-item post__info-item--death-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title">الام</h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            <?php if($person->family): ?>
                                                    <a href="<?php echo e(route('family.member', ['id' => $person->family->mother->id])); ?>"><?php echo e($person->family->mother->name); ?></a>
                                                <?php else: ?>
                                                    ---
                                                <?php endif; ?> </p> </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- PLACE OF DEATH : end -->



                                    <!-- BURIAL PLACE : begin -->
                                    <li class="post__info-item post__info-item--burial-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <h2 class="post__info-item-title"> نبذه شخصية </h2>
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            <?php echo $person->note; ?>

                                        </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- BURIAL PLACE : end -->



                                </ul>
                                <!-- POST INFO LIST : end -->

                            </div>
                            <!-- POST INFO : end -->



                            <?php if($person->family): ?>
                            <!-- POST GALLERY : begin -->
                            <div class="post__info">
                                <h2 class="post__info-item-title"> الأخوان </h2>

                                <ul class="post__info-list">

                                    <?php $__currentLoopData = $person->family->sons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brother): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- BURIAL PLACE : begin -->
                                    <li class="post__info-item post__info-item--burial-place">

                                        <!-- POST INFO ITEM TITLE : begin -->
                                        <!-- POST INFO ITEM TITLE : end -->

                                        <!-- POST INFO ITEM TEXT : begin -->
                                        <p class="post__info-item-text">
                                            <a href="<?php echo e(route('family.member', ['id' => $brother->id])); ?>"><?php echo e($brother->name); ?></a>
                                        </p>
                                        <!-- POST INFO ITEM TEXT : end -->

                                    </li>
                                    <!-- BURIAL PLACE : end -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <!-- <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_06.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_06-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_05.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_05-600x600.jpg" alt="Family">

                                        </a>

                                    </li>


                                    <li class="post__gallery-item">

                                        <a href="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_04.jpg" class="post__gallery-item-link lsvr-open-in-lightbox" title="">

                                            <img class="post__gallery-item-img" src="https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2022/01/member_gallery_04-600x600.jpg" alt="Family">

                                        </a>

                                    </li> -->


                                </ul>

                            </div>
                            <!-- POST GALLERY : end -->
                            <?php endif; ?>



                        </div>
                    </div>
                    <!-- POST CONTAINER INNER : end -->

                </div>
                <!-- POST CONTAINER : end -->


                <!-- FAMILY TREE : begin -->
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('family-tree', ['person' => $person])->html();
} elseif ($_instance->childHasBeenRendered('1ChxVEQ')) {
    $componentId = $_instance->getRenderedChildComponentId('1ChxVEQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('1ChxVEQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1ChxVEQ');
} else {
    $response = \Livewire\Livewire::mount('family-tree', ['person' => $person]);
    $html = $response->html();
    $_instance->logRenderedChild('1ChxVEQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>;
                <!-- FAMILY TREE : end -->

                <script type="application/ld+json">
                    {
                        "@context": "http://schema.org",
                        "@type": "Person",
                        "name": "John Lewis"

                            ,
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2021/12/portrait_01.jpg",
                            "width": "1200",
                            "height": "1200",
                            "thumbnailUrl": "https://preview.lsvr.sk/lineago/wp-content/uploads/sites/8/2021/12/portrait_01-300x300.jpg"
                        }

                    }
                </script>


            </div>
        </article>
        <!-- POST : end -->


    </div>
    <!-- POST SINGLE : end -->




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal427056743380f0127f5c6367fdb385e78ff8dc7a)): ?>
<?php $component = $__componentOriginal427056743380f0127f5c6367fdb385e78ff8dc7a; ?>
<?php unset($__componentOriginal427056743380f0127f5c6367fdb385e78ff8dc7a); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\family-tree\resources\views/frontend/family-member.blade.php ENDPATH**/ ?>