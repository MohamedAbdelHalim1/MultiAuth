<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/icon.svg') }}" type="image/x-icon">
    <title>User Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="card-body">
                            <div class="pt-4 pb-2 d-flex align-items-center">
                                <img src="{{ asset('assets/images/icon.svg') }}" alt="Logo" class="login-logo" style="width:75px;height:75px; margin-right: 10px;">
                                <h5 class="card-title text-center pb-0 fs-4" style="font-size:25px;">User Register</h5>
                            </div>


                                <form method="POST" action="{{ route('user.register') }}" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <div class="input-group has-validation">
                                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                    <div class="col-12">
                                        <label for="password-confirm" class="form-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <button class="btn btn-primary w-100" type="submit">Register</button>
                                    </div>

                                    <div class="col-12 mt-3 text-center">
                                        <div class="form-group">
                                            <a href="{{ route('user.login') }}">Already User?</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
