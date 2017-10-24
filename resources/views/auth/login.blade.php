@extends('layouts.auth')
@section('content')
    <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-user-secret green"></i>
                    Please Login
                </h4>

                <div class="space-6"></div>

                <form method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="block clearfix">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="email" required/>
                                    <i class="ace-icon fa fa-user"></i>
                                </span>
                            </label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="block clearfix">
                                <span class="block input-icon input-icon-right">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required/>
                                    <i class="ace-icon fa fa-lock"></i>
                                </span>
                            </label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                            @endif
                        </div>

                        <div class="space"></div>

                        <div class="clearfix">
                            <label class="inline">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember Me
                                <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-key"></i>
                                <span class="bigger-110">Login</span>
                            </button>
                        </div>

                        <div class="space-4"></div>
                    </fieldset>
                </form>

            </div><!-- /.widget-main -->

            <div class="toolbar clearfix">
                <div>
                    <a href="#" data-target="#forgot-box" class="forgot-password-link">
                        I forgot my password
                    </a>
                </div>
            </div>
        </div><!-- /.widget-body -->
    </div><!-- /.login-box -->
    <div id="forgot-box" class="forgot-box widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header red lighter bigger">
                    <i class="ace-icon fa fa-key"></i>
                    Retrieve Password
                </h4>

                <div class="space-6"></div>
                <p>
                    Enter your email and to receive instructions
                </p>

                <form>
                    <fieldset>
                        <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                        </label>

                        <div class="clearfix">
                            <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                <i class="ace-icon fa fa-lightbulb-o"></i>
                                <span class="bigger-110">Send Me!</span>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div><!-- /.widget-main -->

            <div class="toolbar center">
                <a href="#" data-target="#login-box" class="back-to-login-link">
                    Back to login
                    <i class="ace-icon fa fa-arrow-right"></i>
                </a>
            </div>
        </div><!-- /.widget-body -->
    </div><!-- /.forgot-box -->
@endsection