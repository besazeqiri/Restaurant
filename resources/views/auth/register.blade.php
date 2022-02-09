@extends('auth.layouts.app')
@section('content')
<div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                        @csrf                             

                        <div class="row mb-3">
                          <div class="col-md-6">
                             <div class="form-floating mb-3 mb-md-0">
                <input class="form-control @error('name') is-invalid @enderror" name="name" id="inputFirstName" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your first name" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            <label for="inputFirstName">{{ __('Name') }}</label>
                            </div>
                          </div>
                        

                          <div class="col-md-6 ">
     <div class="form-floating mb-3 ">
        <input class="form-control  @error('email') is-invalid @enderror" id="inputEmail" type="email" name="email"   value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com" />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                 @enderror
                                                <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                                            </div>
</div>

    <div class="row mb-3">
          <div class="col-md-12">
               <div class="form-floating mb-3 mb-md-0">
                <input class="form-control w-100 @error('password') is-invalid @enderror" id="inputPassword" type="password"  name="password" required autocomplete="new-password" placeholder="Create a password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                     <label for="inputPassword">{{ __('Password') }}</label>
                                                    </div>
                                                </div>

   <div class="col-md-12 mt-4">
    <div class="form-floating mb-3 ">
    <input class="form-control w-100" id="inputPasswordConfirm" name="password_confirmation" type="password"  required autocomplete="new-password" placeholder="Confirm password" />
            <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>


                                            <div class="mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Create Account') }}</button>
                                               </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    @if (Route::has('login'))
                                        <div class="small"><a href="{{ route('login') }}">{{ __('Have an account? Go to login') }}</a></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
