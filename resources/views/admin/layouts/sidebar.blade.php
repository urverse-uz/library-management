<aside class="main-sidebar sidebar-dark-primary">
    <a href="../../../template/index3.html" class="brand-link">
        <img src="../../../template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../../template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->email }}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>

                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('books.index') }}" class="nav-link">
                                <i class="fas fa-book nav-icon"></i>

                                <p>Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('groups.index') }}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>

                                <p>Groups</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>

                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>

                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('loans.index') }}" class="nav-link">
                                <i class="fas fa-handshake nav-icon"></i>

                                <p>Loans</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">--}}
                        {{--<i class="nav-icon fas fa-th"></i>--}}

                        {{--<p>--}}
                            {{--Simple Link--}}
                            {{--<span class="right badge badge-danger">New</span>--}}
                        {{--</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
    </div>
</aside>
