<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand" href="inicio.php"><?php echo $nombreapp; ?></a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>

    <a href="../../../index.php" class="btn btn-outline-primary d-none d-sm-block d-xs-block"><i class="fas fa-desktop"></i> &nbsp;Ir a la página principal</a>
    <a href="#" class="btn btn-outline-primary d-md-none d-lg-none d-xl-none"><i class="fas fa-comment-alt"></i></a>

    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-2 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="../../vendor/img/profile.svg"/></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="../../vendor/img/profile.svg" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">Elias Astrada</div>
                        <div class="dropdown-user-details-email">eliasastrada2293@gmail.com</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Cerrar sesión
                </a>
            </div>
        </li>
    </ul>
</nav>
