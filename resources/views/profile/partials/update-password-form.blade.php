<section class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <header class="mb-4">
            <h2 class="card-title text-primary">
                <i class="fas fa-lock me-2"></i>{{ __('Update Password') }}
            </h2>
            <p class="text-muted mb-0">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-4">
                <label for="update_password_current_password" class="form-label fw-bold">{{ __('Current Password') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                </div>
                @if ($errors->updatePassword->has('current_password'))
                    <div class="text-danger mt-2 small"><i class="fas fa-exclamation-circle me-1"></i>{{ $errors->updatePassword->first('current_password') }}</div>
                @endif
            </div>

            <div class="mb-4">
                <label for="update_password_password" class="form-label fw-bold">{{ __('New Password') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                </div>
                @if ($errors->updatePassword->has('password'))
                    <div class="text-danger mt-2 small"><i class="fas fa-exclamation-circle me-1"></i>{{ $errors->updatePassword->first('password') }}</div>
                @endif
            </div>

            <div class="mb-4">
                <label for="update_password_password_confirmation" class="form-label fw-bold">{{ __('Confirm Password') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                </div>
                @if ($errors->updatePassword->has('password_confirmation'))
                    <div class="text-danger mt-2 small"><i class="fas fa-exclamation-circle me-1"></i>{{ $errors->updatePassword->first('password_confirmation') }}</div>
                @endif
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>{{ __('Save Changes') }}
                </button>

                @if (session('status') === 'password-updated')
                    <p class="text-success mb-0">
                        <i class="fas fa-check-circle me-1"></i>{{ __('Password updated successfully.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
