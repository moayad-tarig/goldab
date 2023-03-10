<div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'active' => request()->routeIs('dashboard')]) ?>">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                <i class="la la-home"></i>
                <span> لوحة التحكم </span>
            </a>
        </li>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'active' => request()->routeIs('family.index')]) ?>">
            <a class="nav-link" href="<?php echo e(route('family.index')); ?>">
                <i class="la la-users"></i>
                <span> الاسر </span>
            </a>
        </li>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'active' => request()->routeIs('person.index')]) ?>">
            <a class="nav-link" href="<?php echo e(route('person.index')); ?>">
                <i class="la la-user"></i>
                <span> الافراد </span>
            </a>
        </li>
        <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-item', 'active' => request()->routeIs('settings.index')]) ?>">
            <a class="nav-link" href="<?php echo e(route('settings.index')); ?>">
                <i class="la la-gear"></i>
                <span> الإعدادات </span>
            </a>
        </li>
    </ul>
</div><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/layout/partials/topmenu.blade.php ENDPATH**/ ?>