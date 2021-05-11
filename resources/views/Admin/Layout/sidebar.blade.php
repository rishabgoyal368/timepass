<ul class="menu">
    <li class="menu-item active ">
        <a href="{{ url('admin/home') }}" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Dashboard</span>

            </span>
        </a>
    </li>
    <li class="menu-item ">
        <a href="#" class="open-dropdown menu-link">
            <span class="menu-label">
                <span class="menu-name">Manage User
                    <span class="menu-arrow"></span>
                </span>
            </span>
        </a>
        <!--submenu-->
        <ul class="sub-menu">
            <li class="menu-item ">
                <a href="{{url('admin/manage-users')}}" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Users</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item ">
        <a href="#" class="open-dropdown menu-link">
            <span class="menu-label">
                <span class="menu-name">Manage Members
                    <span class="menu-arrow"></span>
                </span>
            </span>
        </a>
        <!--submenu-->
        <ul class="sub-menu">
            <li class="menu-item ">
                <a href="{{ url('admin/member') }}?type=Actor" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Actor</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('admin/member') }}?type=Crew-member" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Crew Member</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('admin/member') }}?type=Director" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Director</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>

        </ul>
    </li>

    <li class="menu-item ">
        <a href="{{ url('admin/movie') }}" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Movies</span>

            </span>
        </a>
    </li>

    <li class="menu-item">
        <a href="{{ url('admin/subscription-list') }}" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Subscription Pacakages</span>

            </span>
        </a>
    </li>

    <li class="menu-item ">
        <a href="#" class="open-dropdown menu-link">
            <span class="menu-label">
                <span class="menu-name">Settings
                    <span class="menu-arrow"></span>
                </span>
            </span>
        </a>
        <!--submenu-->
        <ul class="sub-menu">
            <li class="menu-item ">
                <a href="{{ url('admin/upload-banner') }}" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Upload Banner</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('admin/app-version') }}" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">App Version</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{ url('admin/payment-key') }}" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Payment Key</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>

        </ul>
    </li>
</ul>