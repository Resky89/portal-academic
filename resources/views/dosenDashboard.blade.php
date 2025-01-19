<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen Dashboard</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-stats {
            transition: transform 0.3s;
        }
        .dashboard-stats:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 48px;
            height: 48px;
            background: #4e73df;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .welcome-banner {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
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

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{url('/dosen/dashboard')}}" class="nav-link px-2 text-white">Home</a></li>
                    <li class="nav-item"><a href="{{url('/view_jadwal')}}" class="nav-link px-2 text-white">Jadwal Kuliah</a></li>
                    <li class="nav-item"><a href="{{url('/nilai')}}" class="nav-link px-2 text-white">Penilaian</a></li>
                    <li class="nav-item"><a href="{{url('about')}}" class="nav-link px-2 text-white">About</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                    <span class="text-white me-3">{{ Auth::user()->name }}</span>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-light me-2">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-info">Log Out</button>
                    </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @if (request()->is('dosen/dashboard'))
            <div class="welcome-banner">
                <h2 class="mb-0">Welcome Back, {{ Auth::user()->name }}!</h2>
                <p class="mb-0 opacity-75">Manage your classes and student assessments</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm dashboard-stats">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon me-3">
                                    <i class="fas fa-chalkboard-teacher fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Classes Taught</h6>
                                    <h3 class="mb-0">8</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm dashboard-stats">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon me-3" style="background: #1cc88a;">
                                    <i class="fas fa-users fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Total Students</h6>
                                    <h3 class="mb-0">245</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm dashboard-stats">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon me-3" style="background: #36b9cc;">
                                    <i class="fas fa-clock fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Upcoming Classes</h6>
                                    <h3 class="mb-0">3</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm dashboard-stats">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon me-3" style="background: #f6c23e;">
                                    <i class="fas fa-tasks fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Pending Grades</h6>
                                    <h3 class="mb-0">15</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Today's Schedule</h5>
                            <a href="{{ url('/view_jadwal') }}" class="btn btn-sm btn-primary">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" border="1">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Matakuliah</th>
                                        <th scope="col">Dosen</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Waktu</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                    @if(isset($view_jadwal) && count($view_jadwal) > 0)
                                        @foreach($view_jadwal as $index => $Get)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $Get->matkul }}</td>
                                            <td>{{ $Get->dosen }}</td>
                                            <td>{{ $Get->prodi }}</td>
                                            <td>{{ $Get->kelas }}</td>
                                            <td>{{ $Get->waktu }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada jadwal yang tersedia.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">Recent Submissions</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-file-alt text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Database Assignment #3</p>
                                    <small class="text-muted">5 new submissions</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-file-code text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Web Programming Project</p>
                                    <small class="text-muted">2 new submissions</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @yield('Content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-code.js"></script>
</body>
</html>
