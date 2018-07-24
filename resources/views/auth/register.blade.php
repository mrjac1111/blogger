@extends('frontend.layouts.user')

@section('content')
    <section class="wow fadeIn bg-light-gray padding-100px-tb sm-padding-60px-tb xs-padding-30px-tb top-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-medium">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin">Register</h1>
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
                        <form id="contact-form" role="form" method="POST" action="{{ url('/register') }}">

                            {{ csrf_field() }}
                            <div>
                                <div id="success-contact-form" class="no-margin-lr"></div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" name="name" id="name" placeholder="Name*" class="border-radius-4 bg-white medium-input" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                               </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" placeholder="Password*" class="border-radius-4 bg-white medium-input">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" id="password" placeholder="Confirm Password*" class="border-radius-4 bg-white medium-input">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">Register</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
