<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
            .quick-action {
                transition: all 0.3s;
            }
            .quick-action:hover {
                background: #f8f9fa;
                cursor: pointer;
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
                        <li class="nav-item"><a href="{{ url('/admin/dashboard') }}" class="nav-link px-2 text-white">Home</a></li>
                        <li class="nav-item"><a href="{{url('/user')}}" class="nav-link px-2 text-white">User</a></li>
                        <li class="nav-item"><a href="{{url('/jadwal_kuliah')}}" class="nav-link px-2 text-white">Jadwal Kuliah</a></li>
                        <li class="nav-item"><a href="{{url('/matkul')}}" class="nav-link px-2 text-white">Matakuliah</a></li>
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
            @if (request()->is('admin/dashboard'))
                <div class="welcome-banner">
                    <h2 class="mb-0">Welcome Back, {{ Auth::user()->name }}!</h2>
                    <p class="mb-0 opacity-75">Monitor and manage your academic system</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm dashboard-stats">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="stat-icon me-3">
                                        <i class="fas fa-users fa-lg"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Users</h6>
                                        <h3 class="mb-0">1,250</h3>
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
                                        <i class="fas fa-user-graduate fa-lg"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Active Students</h6>
                                        <h3 class="mb-0">850</h3>
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
                                        <i class="fas fa-chalkboard-teacher fa-lg"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Faculty Members</h6>
                                        <h3 class="mb-0">75</h3>
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
                                        <i class="fas fa-book fa-lg"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Courses</h6>
                                        <h3 class="mb-0">120</h3>
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
                                <a href="{{ url('/jadwal_kuliah') }}" class="btn btn-sm btn-primary">Manage Schedule</a>
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

                        <div class="card border-0 shadow-sm mt-4">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0">Recent Activities</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Activity</th>
                                                <th>User</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>New User Registration</td>
                                                <td>John Doe</td>
                                                <td>2 hours ago</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>Course Schedule Update</td>
                                                <td>Admin System</td>
                                                <td>3 hours ago</td>
                                                <td><span class="badge bg-info">Processing</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-body p-0">
                                <a href="{{ url('/user') }}" class="d-flex align-items-center p-3 quick-action text-decoration-none text-dark border-bottom">
                                    <i class="fas fa-user-plus me-3 text-primary"></i>
                                    <div>
                                        <h6 class="mb-0">Add New User</h6>
                                        <small class="text-muted">Create new user account</small>
                                    </div>
                                </a>
                                <a href="{{ url('/jadwal_kuliah') }}" class="d-flex align-items-center p-3 quick-action text-decoration-none text-dark border-bottom">
                                    <i class="fas fa-calendar-plus me-3 text-primary"></i>
                                    <div>
                                        <h6 class="mb-0">Manage Schedule</h6>
                                        <small class="text-muted">Update class schedules</small>
                                    </div>
                                </a>
                                <a href="{{ url('/matkul') }}" class="d-flex align-items-center p-3 quick-action text-decoration-none text-dark">
                                    <i class="fas fa-book-medical me-3 text-primary"></i>
                                    <div>
                                        <h6 class="mb-0">Add Course</h6>
                                        <small class="text-muted">Create new course</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @yield('Content')
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

<script>
    $(document).ready(function () {
        // Initialize dropdown
        var myDropdown = document.getElementById('adminDropdown');
        var bsDropdown = new bootstrap.Dropdown(myDropdown);
    });
</script>
