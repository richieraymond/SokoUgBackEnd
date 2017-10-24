@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="panel panel-default">
        <div class="panel-heading">
          Create New Subcategory
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
          {{ Form::open(['action' => 'SubcategoryController@store','enctype'=>'multipart/form-data']) }}
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('name', 'Subcategory Name') }}
              {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Subcategory Icon') }}
              {{ Form::file('icon', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Select Category') }}
              {{ Form::select('category', $category, '', ['class' => 'form-control show-tick']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('description', 'Description') }}
              {{ Form::textarea('description', '', ['class' => 'form-control', 'rows'=>'3']) }}
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
