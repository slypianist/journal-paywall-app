<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="avatar flex-shrink-0">
                <img src="https://journal.deepoceanconsults.com/wp-content/uploads/2023/02/cropped-tv-journal-e1675898570563.png">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashrz</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Posts</span></li>

        <!-- Posts -->
        <li
            class="menu-item {{ request()->is('posts') ? 'active' : '' }} {{ request()->is('posts/*/*') ? 'active' : '' }}">
            <a href="{{ route('posts.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">News</div>
            </a>
        </li>

        <!-- Create Posts -->
        <li class="menu-item {{ request()->is('posts/create') ? 'active' : '' }}">
            <a href="{{ route('posts.create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Create News</div>
            </a>
        </li>

        {{-- Categories --}}
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Categories</span></li>

        <!-- Categories List -->
        <li
            class="menu-item {{ request()->is('admin-categories') ? 'active' : '' }} {{ request()->is('admin-categories/*/*') ? 'active' : '' }}">
            <a href="{{ route('admin-categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">News Categories</div>
            </a>
        </li>

        <!-- Create Categories -->
        <li class="menu-item {{ request()->is('admin-categories/create') ? 'active' : '' }}">
            <a href="{{ route('admin-categories.create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Create Categories</div>
            </a>
        </li>


        {{-- Only Admin Can Have Access To Author Page --}}
        @can('Admin')
            {{-- Author --}}
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Author</span></li>

            <!-- Author List -->
            <li class="menu-item {{ request()->is('author*') ? 'active' : '' }}">
                <a href="{{ route('authors.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-crown"></i>
                    <div data-i18n="Basic">News Authors</div>
                </a>
            </li>

            {{-- Podcasts --}}
        <li class="menu-header small text-uppercase"><span class="menu-header-text">PODCASTS</span></li>

        <!-- Podcast List -->
        <li
            class="menu-item {{ request()->is('podcasts') ? 'active' : '' }} ? 'active' : '' }}">
            <a href="{{ route('podcasts.admin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Podcasts</div>
            </a>
        </li>

        <li
            class="menu-item {{ request()->is('podcasts/create') ? 'active' : '' }} ? 'active' : '' }}">
            <a href="{{ route('podcasts.create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Create Podcast</div>
            </a>
        </li>

            <!-- Subscription -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manage Subscriptions</span>
        </li>

        <li
            class="menu-item {{ request()->is('manage-sub') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Settings">Subscriptions</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('manage-sub') ? 'active' : '' }}">
                    <a href="{{ route('manage.sub') }}" class="menu-link">
                        <div data-i18n="Account">View Subscriptions</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('subscribers') ? 'active' : '' }}">
                    <a href="{{ route('profile.edit') }}" class="menu-link">
                        <div data-i18n="Account">All Subscribers</div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Settings -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        <li
            class="menu-item {{ request()->is('profile') ? 'active open' : '' }} {{ request()->is('general-settings*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
                {{-- <li class="menu-item {{ request()->is('general-settings*') ? 'active' : '' }}">
                    <a href="{{ route('general-settings.index') }}" class="menu-link">
                        <div data-i18n="Site Settings">General Site Settings</div>
                    </a>
                </li> --}}
                <li class="menu-item {{ request()->is('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile.edit') }}" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
            </ul>
        </li>



        @endcan



    </ul>
</aside>
<!-- / Menu -->
