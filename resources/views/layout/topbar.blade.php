<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Logo Styling */
        .navbar-brand-logo {
            width: 180px;
            height: auto;
        }

        /* Navbar styling */
        .navbar-custom {
            background-color: #f8f9fa;
            padding: 0.5rem 1rem;
        }

        /* Icon Section */
        .icon-section {
            display: flex;
            gap: 15px;
        }

        /* Center section styling */
        .menu-section {
            flex-grow: 1;
            display: flex;
            justify-content: end;
            gap: 20px;
        }

        /* Link styling */
        .menu-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .menu-link i {
            margin-left: 5px;
        }

        /* Align logo on the far right */
        .logo-section {
            margin-left: auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom w-100">
        <div class="container-fluid d-flex align-items-center">

            <!-- Left Icon Section -->
            <div class="icon-section">
                <i class="fa-regular fa-envelope"></i>
                <i class="fa-regular fa-bell"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-globe"></i>
            </div>

            <!-- Center Menu Section -->
            <div class="menu-section ms-auto">
                <a class="menu-link" href="#">
                    <span>باقات و منتجات</span>
                </a>
                <a class="menu-link" href="#">
                    <i class="fa-solid fa-chevron-down"></i>
                    <span class="badge badge-glow bg-danger rounded-pill">جدید</span>
                    <span>تمکین باشنورز</span>
                </a>
                <a class="menu-link" href="#">
                    <i class="fa-solid fa-chevron-down"></i>
                    <span>البحث عن مشاريع</span>
                </a>
                <a class="menu-link" href="#">
                    <i class="fa-solid fa-chevron-down"></i>
                    <span>البحث عن فریلانسرز</span>
                </a>
            </div>

            <!-- Logo Section -->
            <div class="logo-section">
                <a class="navbar-brand" href="#">
                    <img class="navbar-brand-logo PSN-logo" src="{{ asset('app-assets') }}/logo/logo-ar.svg"
                        alt="Passioneurs">
                </a>
            </div>
        </div>
    </nav>


    <!-- Add Font Awesome and Bootstrap JS for icons and responsive functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>



</html>
