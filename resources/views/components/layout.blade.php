<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 4rem;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        
        .sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 4rem;
            height: calc(100vh - 4rem);
            overflow-y: auto;
        }
        
        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }
        
        .sidebar .nav-link.active {
            color: #007bff;
        }
        
        .btn-subscribe {
            font-size: 1.25rem;
            padding: 0.5rem 1rem;
        }
        
        .archive-list {
            list-style: none;
            padding-left: 0;
        }
        
        .archive-list li {
            margin-bottom: 0.25rem;
        }
        
        .footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }
        
        .footer p:last-child {
            margin-bottom: 0;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">JJS World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Style</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Science</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opinion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Blog template built for Bootstrap by @mdo</p>
            <a href="#" class="text-muted">Back to top</a>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" class="btn btn-secondary back-to-top" id="backToTop">↑</a>

</body>
</html>