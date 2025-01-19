@extends(Auth::check() ? (Auth::user()->type == 'dosen' ? 'dosenDashboard' : (Auth::user()->type == 'admin' ? 'adminDashboard' : (Auth::user()->type == 'mahasiswa' ? 'dashboard' : 'home'))) : 'home')

@section('Content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 text-primary">
                        <i class="fas fa-info-circle me-2"></i>{{ __('About This Application') }}
                    </h5>
                </div>
                <div class="card-body text-gray-900">
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary mb-3">
                            <i class="fas fa-user-graduate me-2"></i>Developer Information
                        </h6>
                        <p class="mb-0">
                            Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Interactive Programming And Technology oleh Muhammad Resky Prabowo Sutejo. Tujuan dari aplikasi ini adalah untuk memberikan solusi interaktif yang memanfaatkan teknologi terbaru dalam pemrograman.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-primary mb-3">
                            <i class="fas fa-code me-2"></i>Technologies Used
                        </h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold mb-3">
                                            <i class="fas fa-laptop-code me-2 text-primary"></i>Programming Languages
                                        </h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="fab fa-html5 me-2 text-danger"></i>HTML</li>
                                            <li class="mb-2"><i class="fab fa-css3-alt me-2 text-primary"></i>CSS</li>
                                            <li class="mb-2"><i class="fab fa-js me-2 text-warning"></i>JavaScript</li>
                                            <li class="mb-2"><i class="fab fa-php me-2 text-info"></i>PHP</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold mb-3">
                                            <i class="fas fa-tools me-2 text-primary"></i>Frameworks & Tools
                                        </h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="fab fa-bootstrap me-2 text-purple"></i>Bootstrap</li>
                                            <li class="mb-2"><i class="fab fa-laravel me-2 text-danger"></i>Laravel</li>
                                            <li class="mb-2"><i class="fas fa-database me-2 text-success"></i>MySQL</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6 class="fw-bold text-primary mb-3">
                            <i class="fas fa-bullseye me-2"></i>Application Purpose
                        </h6>
                        <p class="mb-0">
                            Aplikasi ini dikembangkan dengan tujuan untuk memberikan pengalaman pengguna yang maksimal serta untuk mempelajari dan mengimplementasikan konsep-konsep interaktif dalam pemrograman dan teknologi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
