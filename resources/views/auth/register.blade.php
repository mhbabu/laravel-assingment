@extends('user.app')

@section('content')
<section class="vh-100">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        {{-- <div class="col-md-6 col-lg-5 d-none d-md-block"> --}}
                            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="login form" class="col-md-6 col-lg-5 d-none d-md-block img-fluid" style="border-radius: 1rem 0 0 1rem;" height="100%"/>
                        {{-- </div> --}}
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account
                                        OR <a href="{{ route('login') }}" style="color: #393f81;">Login </a></h5>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="mt-3 mt-2">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block"
                                            type="button">Register</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
