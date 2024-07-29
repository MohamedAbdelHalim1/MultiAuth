<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/icon.svg') }}" type="image/x-icon">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidenav {
            height: 100vh;
            width: 250px; 
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            border-right: 1px solid #dee2e6;
        }
        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            color: #333;
            display: block;
        }
        .sidenav a:hover {
            background-color: #e9ecef;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            z-index: 200; 
        }
        .content-wrapper {
            display: flex;
            flex-direction: row;
        }
        .navbar-container {
            flex: 1;
        }
        .sidenav-container {
            flex: 0 0 250px; 
        }
        .sidenav .sidenav-header {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
        }
        .sidenav .sidenav-header img {
            width: 30px;
            height: 30px;
            margin-right: 10px; /* Reduce space between image and text */
        }
        .sidenav .sidenav-header h5 {
            font-size: 20px;
            margin: 0;
        }
        .sidenav .sidenav-header:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="sidenav-container">
            <div class="sidenav">
                <a href="{{ route('admin.dashboard') }}" class="sidenav-header">
                    <img src="{{ asset('assets/images/icon.svg') }}" alt="Logo">
                    <h5>Dashboard</h5>
                </a>
                <a href="#">Categories</a>
                <a href="#">Products</a>
                <a href="#">Orders</a>
                <a href="#">Users</a>
                <a href="#">Staff</a>
            </div>
        </div>

        <div class="navbar-container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <!-- Add additional nav items here if needed -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('user.logout') }}" method="POST" class="dropdown-item">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
