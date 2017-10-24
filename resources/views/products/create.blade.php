@extends('layouts.shop')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="card card-success">
        <div class="card-title">
          Create New Product
        </div>
        <div class="card-body">
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
              {{ Form::label('name', 'Product Name') }}
              {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Product Category') }}
              {{ Form::select('category', $category, '', ['class' => 'form-control show-tick']) }}
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
              {{ Form::label('name', 'Quantity') }}
              {{ Form::number('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('name', 'Price') }}
              {{ Form::number('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Product Image') }}
              {{ Form::file('icon', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
          <div class="form-line">
              {{ Form::submit('Submit', ['class' => 'btn btn-block btn-outline-primary']) }}
          </div>
          </div>
          {{ Form::close() }}
          </dv><!--end of left div-->
        </div>
      </div>
    </div>
@endsection

