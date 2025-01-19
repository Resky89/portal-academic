<section class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <header class="mb-4">
            <h2 class="card-title text-primary">
                <i class="fas fa-user-circle me-2"></i>{{ __('Profile Information') }}
            </h2>
            <p class="text-muted mb-0">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-4">
                <label for="name" class="form-label fw-bold">{{ __('Name') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                </div>
                @if ($errors->has('name'))
                    <div class="text-danger mt-2 small"><i class="fas fa-exclamation-circle me-1"></i>{{ $errors->first('name') }}</div>
                @endif
            </div>

            <div class="mb-4">
                <label for="email" class="form-label fw-bold">{{ __('Email') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="email">
                </div>
                @if ($errors->has('email'))
                    <div class="text-danger mt-2 small"><i class="fas fa-exclamation-circle me-1"></i>{{ $errors->first('email') }}</div>
                @endif

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="alert alert-warning mt-3" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link text-decoration-none p-0 ms-2">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </div>

                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success mt-3" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif
                @endif
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>{{ __('Save Changes') }}
                </button>

                @if (session('status') === 'profile-updated')
                    <p class="text-success mb-0">
                        <i class="fas fa-check-circle me-1"></i>{{ __('Saved successfully.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
