<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
                </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="https://ui-avatars.com/api/?background=bacfff&color=ffffff&bold=true&uppercase=false&name=<?= auth::user('nama'); ?>">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold"><?= auth::user('nama'); ?></span>
                </div>
            </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('auth/logout.php') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
            </a>
            </div>
        </li>
        </ul>
    </div>
</div>