<div class="navbar-wrapper">
    <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item">
        <a class="navbar-brand" href="index.html">
            <img class="brand-logo" alt="modern admin logo" src="../../../template/app-assets/images/logo/logo.png">
            <h3 class="brand-text">نظام شجرة العائلة</h3>
        </a>
        </li>
        <li class="nav-item d-md-none">
        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
    </ul>
    </div>
    <div class="navbar-container container center-layout">
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="<?php echo e(route('family.home')); ?>">الذهاب الى الموقع</a></li>
        
        </ul>
        <ul class="nav navbar-nav float-right">
        <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
            <span class="mr-1">مرحبا,
                <span class="user-name text-bold-700"><?php echo e(auth()->user()->name); ?></span>
            </span>
            <span class="avatar avatar-online">
                <img src="../../../template/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> تعديل الملف الشخصي</a>
            
                <div class="dropdown-divider"></div>
                <button onclick="$('#logout-form').submit()" class="dropdown-item"><i class="ft-power"></i> تسجيل خروج</button>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
        
        </ul>
    </div>
    </div>
</div><?php /**PATH C:\laragon\www\family-tree\resources\views/backend/layout/partials/topbar.blade.php ENDPATH**/ ?>