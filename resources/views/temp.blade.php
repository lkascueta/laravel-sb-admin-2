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
                                            <form action="POST">
                                                <div class="form-group">
                                                    <label for="username" class="sr-only">
                                                        Username / email
                                                    </label>
                                                    <input type="text" name="username" id="username"
                                                        class="form-control"
                                                        value=""
                                                        placeholder="Username / email"
                                                        autocomplete="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="sr-only">Password</label>
                                                    <input type="password" name="password" id="password" value=""
                                                        class="form-control"
                                                        placeholder="Password"
                                                        autocomplete="current-password">
                                                </div>
                                                <div class="rememberpass mt-3">
                                                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                                                    <label for="rememberusername">Remember username</label>
                                                </div>

                                            <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Log in</button>
                                            </form>

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
