<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/60f7877399.js" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sidenav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="dashboard">
        <!-- sidebar -->
        <div class="sidebar hide">
            <div class="header">
                <span class="material-icons">
                    vaccines
                </span>
                <span class="logo">EDoctor</span>
            </div>
            <div class="main">
                <span class="option">Dashboard</span>
                <div class="list-item">
                    <a href="" class="icon">
                        <span class="material-icons">
                            insights
                        </span>
                        <span class="description">Analytics</span>
                    </a>
                </div>
                <span class="option">Pages</span>
                <div class="list-item">
                    <a href="#" class="icon">
                        <span class="material-icons">
                            grid_view
                        </span>
                        <span class="description">Invoices</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#" class="icon">
                        <span class="material-icons">
                            groups
                        </span>
                        <span class="description">Patient</span>
                    </a>
                </div>
            </div>
            <div class="account">
                <a href="#" class="profile">
                    <img src="assets/img/user.png" class="user-picture" alt="">
                    <span class="description">Hafiyyan Faza</span>
                    <span class="material-icons icon">
                        expand_more
                    </span>
                </a>
            </div>
        </div>
        <!-- End sidebar -->

        <!-- Content -->
        <div class="main-content">
            <nav>
                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="radio"></div>
                    </label>
                </div>
                <input type="checkbox" id="check">
                <label for="check">
                    <span class="material-icons" id="btn">
                        subject
                    </span>
                    <span class="material-icons" id="close">
                        close
                    </span>
                </label>
                <ul class="nav-item">
                    <li><a href="#"><span class="material-icons">notifications_active</span></a></li>
                    <li><a href="#"><span class="material-icons">bookmark_border</span></a></li>
                    <li>
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/Ellipse 1.svg" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another</a></li>
                            <li><a class="dropdown-item" href="#">Something</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>



        </div>
    </div>

    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>