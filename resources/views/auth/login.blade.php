@extends('layouts.auth');
<div class="page-wrapper">
    <div class="container-fluid mt-0">
        <div class="col-12">
            <section class="col-12">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-sm-8">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-header text-center"><img class="img-fluid" src="{{ asset('img/gonzaga.png') }}" alt="" srcset=""></div>
                                <div class="card-body">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-8">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger border-left-danger" role="alert">
                                                        <ul class="pl-4 my-2">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif



                                            <form method="POST" action="{{ route('login') }}" class="user">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <label for="username" class="sr-only">
                                                        Email Address
                                                    </label>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control"
                                                        placeholder="{{ __('E-Mail Address') }}"
                                                        value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="sr-only">Password</label>
                                                    <input type="password" name="password" id="password" value=""
                                                        class="form-control"
                                                        placeholder="{{ __('Password') }}"
                                                        autocomplete="current-password">
                                                </div>
{{--                                                 <div class="rememberpass mt-3">
                                                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                                                    <label for="rememberusername">Remember username</label>
                                                </div> --}}


                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                                    </div>
                                                </div>

{{--                                             <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Log in</button> --}}

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            </form>

                                            <hr>
{{-- To  be added after admin panel is done --}}
{{--                                             @if (Route::has('password.request'))
                                                <div class="text-center">
                                                    <a class="small" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Password?') }}
                                                    </a>
                                                </div>
                                            @endif
 --}}
                                            @if (Route::has('register'))
                                                <div class="text-center">
                                                    <a class="small" href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>


</div>
</div>
