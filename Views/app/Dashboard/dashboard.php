<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Panel de Control</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #4e73df;
            --secondary-color: #858796;
            --success-color: #1cc88a;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
            --dark-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fc;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, var(--primary-color) 0%, #224abe 100%);
            transition: all 0.3s;
            z-index: 1000;
        }

        .sidebar-brand {
            padding: 1.5rem 1rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-brand h4 {
            color: white;
            margin: 0;
            font-weight: 600;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            padding: 1rem 1.5rem;
            border-radius: 0;
            transition: all 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* Top Navigation */
        .top-nav {
            background: white;
            box-shadow: 0 0.15rem 1.75rem rgba(33, 40, 50, 0.15);
            padding: 1rem 2rem;
        }

        /* Cards */
        .stat-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.15rem 1.75rem rgba(33, 40, 50, 0.15);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card .card-body {
            padding: 1.5rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--secondary-color);
            text-transform: uppercase;
            font-weight: 600;
        }

        .stat-icon {
            font-size: 2rem;
            opacity: 0.3;
        }

        /* Charts Container */
        .chart-container {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
            font-size: 1.2rem;
        }

        /* Table */
        .table-custom {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0.15rem 1.75rem rgba(33, 40, 50, 0.15);
        }

        .table-custom thead {
            background-color: var(--primary-color);
            color: white;
        }

        /* Progress bars */
        .progress-custom {
            height: 8px;
            border-radius: 4px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }

            .sidebar.show {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }

        /* Badges */
        .badge-custom {
            font-size: 0.75rem;
            padding: 0.5rem 0.75rem;
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="fas fa-chart-line"></i> DashPanel</h4>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard">
                    <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#usuarios">
                    <i class="fas fa-users"></i>Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#productos">
                    <i class="fas fa-box"></i>Productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ventas">
                    <i class="fas fa-shopping-cart"></i>Ventas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reportes">
                    <i class="fas fa-chart-bar"></i>Reportes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#configuracion">
                    <i class="fas fa-cog"></i>Configuración
                </a>
            </li>
            <li class="nav-item mt-4">
                <a class="nav-link" href="#logout">
                    <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navigation -->
        <nav class="top-nav d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-outline-primary d-md-none" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h2 class="mb-0 d-inline-block ms-2">Dashboard</h2>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user"></i> Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container-fluid p-4 fade-in">
            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card border-left-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="stat-label">Total Usuarios</div>
                                    <div class="stat-number text-primary">1,248</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users stat-icon text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card border-left-success">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="stat-label">Ventas Mensuales</div>
                                    <div class="stat-number text-success">$42,350</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign stat-icon text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card border-left-warning">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="stat-label">Pedidos Pendientes</div>
                                    <div class="stat-number text-warning">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock stat-icon text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card border-left-danger">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="stat-label">Productos Agotados</div>
                                    <div class="stat-number text-danger">5</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-exclamation-triangle stat-icon text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row mb-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="card stat-card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="m-0 font-weight-bold">Gráfico de Ventas</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <div class="text-center">
                                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                                    <p>Gráfico de ventas mensuales<br>
                                        <small>Aquí se integraría Chart.js o similar</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="card stat-card">
                        <div class="card-header bg-success text-white">
                            <h6 class="m-0 font-weight-bold">Progreso de Metas</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Ventas del Mes</span>
                                    <span>78%</span>
                                </div>
                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-success" style="width: 78%"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Nuevos Clientes</span>
                                    <span>65%</span>
                                </div>
                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-primary" style="width: 65%"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Satisfacción</span>
                                    <span>92%</span>
                                </div>
                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-warning" style="width: 92%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card stat-card">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold">Actividad Reciente</h6>
                            <button class="btn btn-sm btn-outline-light">Ver Todo</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                            <th>Fecha</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#001</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                                        <i class="fas fa-user text-white"></i>
                                                    </div>
                                                    Juan Pérez
                                                </div>
                                            </td>
                                            <td>Nueva compra</td>
                                            <td>2024-12-18 10:30</td>
                                            <td><span class="badge bg-success badge-custom">Completado</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1">Ver</button>
                                                <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#002</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                                        <i class="fas fa-user text-white"></i>
                                                    </div>
                                                    María García
                                                </div>
                                            </td>
                                            <td>Registro de usuario</td>
                                            <td>2024-12-18 09:15</td>
                                            <td><span class="badge bg-warning badge-custom">Pendiente</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1">Ver</button>
                                                <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#003</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                                        <i class="fas fa-user text-white"></i>
                                                    </div>
                                                    Carlos López
                                                </div>
                                            </td>
                                            <td>Devolución</td>
                                            <td>2024-12-18 08:45</td>
                                            <td><span class="badge bg-danger badge-custom">Rechazado</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1">Ver</button>
                                                <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar Toggle for Mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });

        // Active link handling
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.sidebar .nav-link').forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Update page title based on clicked section
                const section = this.textContent.trim();
                document.querySelector('.top-nav h2').textContent = section;
            });
        });

        // Animate stats on page load
        window.addEventListener('load', function() {
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const finalValue = stat.textContent;
                stat.textContent = '0';

                // Simple counter animation
                let current = 0;
                const increment = parseInt(finalValue.replace(/[^0-9]/g, '')) / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= parseInt(finalValue.replace(/[^0-9]/g, ''))) {
                        stat.textContent = finalValue;
                        clearInterval(timer);
                    } else {
                        const prefix = finalValue.includes('$') ? '$' : '';
                        stat.textContent = prefix + Math.floor(current).toLocaleString();
                    }
                }, 30);
            });
        });

        // Progress bar animation
        setTimeout(() => {
            document.querySelectorAll('.progress-bar').forEach(bar => {
                bar.style.transition = 'width 1.5s ease-in-out';
            });
        }, 500);
    </script>
</body>

</html>