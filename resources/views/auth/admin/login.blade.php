<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">

</head>
<body>

  <div class="container mt-2">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="card">
          <div class="card-header">Admin Login</div>
          @include('frontend.partials.messages')

          <div class="card-body">
            <form method="POST" action="{{ route('admin.login.submit') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Login
                  </button>

                  <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                    Forgot Your Password?
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
