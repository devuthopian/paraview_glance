<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>
            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>
            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>
            <li class=" "><a href="{{ route('admin.access.user.index') }}"><i class="fa fa-users"></i> <span>User Management</span></a></li>
            <li class=" "><a href="{{ route('admin.settings.edit', 1) }}"><i class="fa fa-gear"></i> <span>Settings</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>



