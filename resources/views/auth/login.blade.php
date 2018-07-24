@extends('frontend.layouts.user')

@section('content')
    <!-- start page title section -->
    <section class="wow fadeIn bg-light-gray padding-100px-tb sm-padding-60px-tb xs-padding-30px-tb top-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-medium">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin">Login</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="display-block margin-10px-top alt-font">We provide innovative solutions to expand your business</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
<div class="container">
    <div class="row">


        <div class="row equalize sm-equalize-auto margin-top-50 margin-bottom-50">
            <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom wow fadeInLeft">
            <div class="padding-fifteen-all bg-light-gray border-radius-6 md-padding-seven-all xs-padding-30px-all height-100">
                <form id="contact-form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div>
                        <div id="success-contact-form" class="no-margin-lr"></div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" name="email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password"  name="password" id="password" placeholder="Password*" class="border-radius-4 bg-white medium-input">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                        <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">Login</button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                    </div>
                </form>
            </div>
        </div>
            </div>
        {{--<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>--}}
    </div>
</div>
@endsection
