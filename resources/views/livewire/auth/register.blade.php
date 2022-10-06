<form method="POST" wire:submit.prevent="register">
    @csrf
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-md-6 mx-auto">
        <div class="row flex-cloumn mb-3">
            <a href="{{ route('google.login') }}" class="btn btn-danger btn-block mb-2">Google</a>
            <a href="{{ route('facebook.login') }}" class="btn btn-primary btn-block mb-2">Facebook</a>
            <a href="{{ route('twitter.login') }}" class="btn btn-success btn-block mb-2">Twitter</a>
            <a href="{{ route('twitch.login') }}" class="btn btn-dark btn-block mb-2">Twitch</a>
        </div>
    </div>
    <p class="text-center">
        OR
    </p>
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                wire:model="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                wire:model="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                wire:model="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" wire:model="password_confirmation"
                required autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4 d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
            <div wire:loading wire:target="register">
                Processing...
            </div>
        </div>
    </div>
</form>
