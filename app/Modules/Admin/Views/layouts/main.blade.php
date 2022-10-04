<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>ithillel</title>
    <link href="/css/lib/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding-bottom: 120px;position: relative;">
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="height: 100vh">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin-home')}}">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.index')}}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('order.index')}}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('role.index')}}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Roles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-4">
        @yield('content')
        </main>
    </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small" style="position: absolute; bottom: 0; left: 0; right: 0;">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

<script src="/js/lib/bootstrap.min.js"></script>
</body>
</html>
