<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<section class="vh-100" style="background-color: #0059ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-3 text-center">
                <i class="bi-hexagon-fill text-primary me-2 fs-1"></i>
                <h4>Employee Data Master Login</h4>
              </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <hr class="my-4">
            <div class="form-outline mb-4">
            <label class="form-label" for="email">{{ __('Email Address') }}</label>
              <input type="email" id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email anda" />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="password">{{ __('Password') }}</label>
              <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password" />
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="bi bi-box-arrow-in-right">{{ __('Login') }}</i></button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
