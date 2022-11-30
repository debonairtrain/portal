<nav id="default-navbar"
     class="navbar navbar-expand navbar-dark bg-primary m-0">
    <div class="container-fluid">
        <!-- Toggle sidebar -->
        <button class="navbar-toggler d-block"
                data-toggle="sidebar"
                type="button">
            <span class="material-icons">menu</span>
        </button>

        <!-- Brand -->
        <a href="dashboard"
           class="navbar-brand">
            <img src="assets/images/logo.png"
                 class="mr-2" style="width: 40px;"
                 alt="School Portal" />
            <span class="d-none d-xs-md-block">Debonair Portal</span>
        </a>

        <form class="search-form d-none d-md-flex">
            <input type="text"
                   class="form-control"
                   placeholder="Search">
            <button class="btn"
                    type="button"><i class="material-icons font-size-24pt">search</i></button>
        </form>

        <div class="flex"></div>

        <!-- Menu -->
        <ul class="nav navbar-nav flex-nowrap">



            <li class="nav-item dropdown ml-1 ml-md-3">
                <a class="nav-link dropdown-toggle"
                   data-toggle="dropdown"
                   href="#"
                   role="button"><?php echo $image; ?>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"
                       href="dashboard">
                        <i class="material-icons">person</i> Dashboard
                    </a>
                    <a class="dropdown-item"
                       href="logout">
                        <i class="material-icons">lock</i> Logout
                    </a>
                </div>
            </li>
            <!-- // END User dropdown -->

        </ul>
        <!-- // END Menu -->
    </div>
</nav>
