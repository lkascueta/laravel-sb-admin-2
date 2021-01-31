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



                                            <form method="POST" action="{{ route('register') }}" class="user">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <label for="name" class="sr-only">
                                                        Yourname
                                                    </label>
                                                    <input type="text" name="name" id="name"
                                                        class="form-control"
                                                        placeholder="{{ __('Name') }}"
                                                        value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group">
                                                  {{--   <label for="username" class="sr-only">
                                                        Yourname
                                                    </label> --}}
                                                    <input type="text" name="username" id="username"
                                                        class="form-control"
                                                        placeholder="{{ __('Username') }}"
                                                        value="{{ old('username') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="sr-only">
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
                                                <div class="form-group">
                                                    <label for="password" class="sr-only">Password</label>
                                                    <input type="password" name="password_confirmation" id="password"
                                                    class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                                                </div>



{{--                                             <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Log in</button> --}}

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                            </form>

                                            <hr>

                                            <div class="text-center">
                                                <a href="{{ route('welcome') }}"><i class="fas fa-home p-2"></i>Go Home</a>
                                            </div>

                                            <div class="text-center">
                                                <a class="small" href="{{ route('login') }}">
                                                    <i class="fas fa-sign-in-alt p-2"></i>{{ __('Already have an account? Login!') }}
                                                </a>
                                            </div>

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
