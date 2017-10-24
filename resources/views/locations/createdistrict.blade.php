@extends('layouts.app')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="panel panel-default">
        <div class="panel-heading">
          Create New District
        </div>
        <div class="panel-body">
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
          {{ Form::open(['action' => 'DistrictsController@store']) }}
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('name', 'District Name') }}
              {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Select Country') }}
              {{ Form::select('country', $country, '', ['class' => 'form-control show-tick','id'=>'country']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
                <select name="region" id="region" class="form-control" required>
                </select>
            </div>
          </div>
        <div class="col-md-12 form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) }}
          </div>
          {{ Form::close() }}
          </div><!--End of left div-->
        </div>
      </div>
    </div>
@endsection

