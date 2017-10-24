@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Register New Company</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="GET" enctype="multipart/form-data" action="{{ url('/companyuser')  }}">
                            {{ csrf_field() }}
                            <div class="col-lg-12">
                                <div class="col-lg-6"><!--##Start of left div-->
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Company Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="companyname" value="{{ old('companyname') }}" required autofocus>

                                            @if ($errors->has('companyname'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('companymail') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Company Mail</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="companymail" value="{{ old('companymail') }}" required autofocus>
                                            @if ($errors->has('companymail'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companymail') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('companydescription') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Company Description</label>

                                        <div class="col-md-6">
                                            <textarea id="name" type="text" cols="20" rows="6" class="form-control" name="companydescription" value="{{ old('companymail') }}" required autofocus></textarea>
                                        @if ($errors->has('companydescription'))
                                                <span class="help-block">
                                <strong>{{ $errors->first('companydescription') }}</strong>
                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div><!--End of left div-->

                                <div class="col-lg-6"><!--Right division-->
                                    <div class="form-group{{ $errors->has('companyaddress') ? ' has-error' : '' }}">
                                        <label for="companywebsite" class="col-md-4 control-label">Company Address</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="companyaddress" value="{{ old('companyaddress') }}" required autofocus>
                                            @if ($errors->has('companyaddress'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companyaddress') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('companyphone') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Telephone</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="companyphone" value="{{ old('companyphone') }}" required autofocus>
                                            @if ($errors->has('companyphone'))
                                                <span class="help-block">
                                    <strong>{{ $errors->first('companyphone') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('companylogo') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Company Logo</label>
                                        <div class="col-md-6">
                                            <input id="name" type="file" class="form-control" name="companylogo" value="{{ old('companylogo') }}" required>
                                            @if ($errors->has('companylogo'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companylogo') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-info" type="submit">
                                                <i class="ace-icon fa fa-arrow-right bigger-110"></i>
                                                Next
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div><!--This is the end of the right division-->
                            </div><!--end of main div consisting of two columns-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
