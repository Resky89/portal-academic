<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style>
            .auth-wrapper {
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
            .form-control:focus {
                box-shadow: none;
                border-color: #4e73df;
            }
            .btn-primary {
                background-color: #4e73df;
                border-color: #4e73df;
            }
            .btn-primary:hover {
                background-color: #2e59d9;
                border-color: #2e59d9;
            }
            .auth-divider {
                position: relative;
                text-align: center;
                margin: 25px 0;
            }
            .auth-divider span {
                background: #fff;
                padding: 0 10px;
                color: #6c757d;
                position: relative;
                z-index: 1;
            }
            .auth-divider:after {
                content: "";
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
                height: 1px;
                background: #e0e0e0;
                z-index: 0;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="auth-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card border-0 shadow-lg rounded-4">
                            <div class="card-body p-5">
                                <div class="text-center mb-4">
                                    <h3 class="fw-bold mb-2">Welcome Back!</h3>
                                    <p class="text-muted">Please login to your account</p>
                                </div>

                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="Enter your password" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                            <label class="form-check-label" for="remember_me">
                                                Remember me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-primary text-decoration-none">
                                                Forgot Password?
                                            </a>
                                        @endif
                                    </div>

                                    <button class="btn btn-primary w-100 py-3 mb-4" type="submit">Sign In</button>

                                    <div class="auth-divider">
                                        <span>or</span>
                                    </div>

                                    <div class="text-center">
                                        <p class="mb-0">Don't have an account?
                                            <a href="{{ route('register') }}" class="text-primary text-decoration-none">Create Account</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
            console.log(login)
        </script>
    </body>
</html>
