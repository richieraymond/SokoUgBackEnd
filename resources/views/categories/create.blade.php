@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="panel panel-success">
        <div class="panel-heading">
          Create New Category
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
          {{ Form::open(['action' => 'CategoryController@store','enctype'=>'multipart/form-data']) }}
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('name', 'Category Name') }}
              {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Category Icon') }}
              {{ Form::file('icon', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('description', 'Description') }}
              {{ Form::textarea('description', '', ['class' => 'form-control', 'rows'=>'3']) }}
            </div>
          </div>
          <div class="form-group">
          <div class="form-line">
              {{ Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) }}
          </div>
          </div>
          {{ Form::close() }}
          </dv><!--end of left div-->
        </div>
      </div>
    </div>
@endsection
