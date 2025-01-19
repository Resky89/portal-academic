<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .hero-section {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/1600x900/?university');
                background-size: cover;
                background-position: center;
                color: white;
                padding: 100px 0;
            }
            .feature-card {
                transition: transform 0.3s;
            }
            .feature-card:hover {
                transform: translateY(-5px);
            }
            .icon-box {
                width: 60px;
                height: 60px;
                background: #4e73df;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
            }
        </style>
    </head>
    <body>
        <nav class="text-bg-dark p-3 navbar navbar-expand-lg">
            <div class="container-fluid">
                            <a class="navbar-brand px-2 text-white" href="#">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link px-2 text-white {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <i class="fas fa-info-circle me-1"></i>About
                                    </a>
                                </li>
                            </ul>


                        </div>
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->type == 'admin')
                                        <a href="{{ url('/admin/dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                                    @elseif (Auth::user()->type == 'dosen')
                                        <a href="{{ url('/dosen/dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                                    @else
                                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                                @endif
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                                @endif
                            @endauth
                        @endif
            </div>
        </nav>

        <div class="hero-section text-center">
            <div class="container">
                <h1 class="display-4 fw-bold mb-4">Welcome to Academic Portal</h1>
                <p class="lead mb-4">Your gateway to academic excellence and seamless learning management</p>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg px-5">Go to Dashboard</a>
                    @else
                        <div>
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Register</a>
                            @endif
                        </div>
                    @endauth
                @endif
            </div>
        </div>

        <div class="container my-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-box text-white mb-3">
                                <i class="fas fa-graduation-cap fa-2x"></i>
                            </div>
                            <h4>Academic Excellence</h4>
                            <p class="text-muted">Access your courses, grades, and academic resources in one place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-box text-white mb-3">
                                <i class="fas fa-calendar-alt fa-2x"></i>
                            </div>
                            <h4>Schedule Management</h4>
                            <p class="text-muted">Stay organized with your class schedules and important dates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-box text-white mb-3">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h4>Community Access</h4>
                            <p class="text-muted">Connect with faculty, students, and access learning resources.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('Content')
    </body>
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
</html>
