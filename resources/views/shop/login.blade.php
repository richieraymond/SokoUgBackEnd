@extends('layouts.shop')

@section('content')
<div class="col-lg-12"><!--Main div-->
<div class="card card-outline-secondary">
  <div class="card-block">
    <h4 class="card-title">Login to your account</h4>
    @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
<div class="col-md-6"><!--Left div-->
          {{ Form::open(['action' => 'CustomerLogin@store','enctype'=>'multipart/form-data']) }}
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('userName', 'User Name') }}
              {{ Form::text('userName', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('password', 'Passoword') }}
              {{ Form::text('password', '', ['class' => 'form-control']) }}
            </div>
          </div>
          
          <div class="col-md-12 form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-block btn-secondary btn-outline-primary']) }}
          </div>
          {{ Form::close() }}
          </div><!--End of left div-->
  </div>
</div>
</div><!--End of main div-->
@endsection
