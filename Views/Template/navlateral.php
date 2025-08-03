    <nav class="col-auto col-md-3 col-xl-2 
            px-sm-2 px-0 bg-dark d-flex flex-column 
            align-items-center align-items-sm-start 
            text-white min-vh-100">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto 
                text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Boutique</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto 
                mb-0 align-items-center align-items-sm-start w-100" id="menu">
            <li class="nav-item w-100">
                <a href="<?= BASE_URL ?>?view=dashboard" class="nav-link text-white active px-3">
                    <i class="bi bi-house-door me-2"></i>
                    <span class="d-none d-sm-inline">Inicio</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="<?= BASE_URL ?>?view=products" class="nav-link text-white px-3">
                    <i class="bi bi-folder me-2"></i>
                    <span class="d-none d-sm-inline">Gestion de productos</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="<?= BASE_URL ?>?view=customers" class="nav-link text-white px-3">
                    <i class="bi bi-folder me-2"></i>
                    <span class="d-none d-sm-inline">Gestion de clientes</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="<?= BASE_URL ?>?view=sales" class="nav-link text-white px-3">
                    <i class="bi bi-folder me-2"></i>
                    <span class="d-none d-sm-inline">Gestion de ventas</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="<?= BASE_URL ?>" class="nav-link text-white px-3">
                    <i class="bi bi-arrow-right me-2"></i>
                    <span class="d-none d-sm-inline">Salir</span>
                </a>
            </li>
        </ul>
    </nav>