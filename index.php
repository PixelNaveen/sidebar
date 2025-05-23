<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager Dashboard</title>
    <!-- Bootstrap 5.3.6 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="sidebar.css" rel="stylesheet">
    <link href="bottomnav.css" rel="stylesheet">
    <!-- Dashboard Widgets CSS -->
    <link href="dashboard-widgets.css" rel="stylesheet">
    <!-- Chart.js CDN for productivity chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.3/dist/chart.umd.min.js"></script>
</head>

<body>
    <div class="d-flex flex-column flex-lg-row min-vh-100">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-grow-1 p-3 bg-light">
            <!-- Header Navigation -->
            <div class="d-flex justify-content-between align-items-center bg-white rounded-3 shadow-sm px-4 py-2 mb-4">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 fw-bold">Dashboard</h4>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <!-- Theme Toggle Icon -->
                    <button id="theme-toggle" class="btn btn-light rounded-circle shadow-sm" title="Toggle Theme">
                        <span id="icon-moon" class="theme-icon" style="display:block;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" fill="#fdc431" />
                            </svg>
                        </span>
                        <span id="icon-sun" class="theme-icon" style="display:none;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="5" fill="#ffeb3b" />
                                <g stroke="#ffeb3b" stroke-width="2">
                                    <line x1="12" y1="1" x2="12" y2="3" />
                                    <line x1="12" y1="21" x2="12" y2="23" />
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                                    <line x1="1" y1="12" x2="3" y2="12" />
                                    <line x1="21" y1="12" x2="23" y2="12" />
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                                </g>
                            </svg>
                        </span>
                    </button>
                    <!-- Notification Bell -->
                    <button class="btn btn-light rounded-circle shadow-sm" title="Notifications">
                        <i class="fas fa-bell"></i>
                    </button>
                    <!-- Desktop Button -->
                    <button class="btn btn-primary shadow d-none d-md-flex align-items-center gap-2 px-3 py-2 rounded-pill">
                        <i class="fas fa-plus"></i>
                        <span>New Task</span>
                    </button>
                    <!-- Mobile Circular Button -->
                    <button class="btn btn-primary shadow d-md-none rounded-circle p-0" style="width: 48px; height: 48px;">
                        <i class="fas fa-plus"></i>
                    </button>
                    <!-- User Avatar Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/user.png" alt="User" width="32" height="32" class="rounded-circle shadow-sm">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Task Summary Cards -->
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pending Tasks</h5>
                            <p class="card-text fs-4">5</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">In Progress</h5>
                            <p class="card-text fs-4">2</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Completed</h5>
                            <p class="card-text fs-4">12</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Later</h5>
                            <p class="card-text fs-4">3</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Widgets (NEW) -->
            <?php include 'dashboard-widgets.php'; ?>
        </main>
    </div>
    <!-- Bottom nav for mobile -->
    <?php include 'bottomnav.php'; ?>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <!-- Dashboard Widgets JS -->
    <script src="dashboard-widgets.js"></script>
</body>

</html>