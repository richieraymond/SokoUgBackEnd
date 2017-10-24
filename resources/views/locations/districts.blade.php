@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories
        <span class="pull-right">
          <a class="btn btn-success" href="{{ url('districts/create') }}">Create New</a>
        </span>
      </div>
      <div class="panel-body">
        <table class="table table-bordered" width='100%'>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Updated At</th>
              <td>Actions</th>
            </tr>
          </thead>
          @if(count($districts) == 0)
            <tr>
              <td colspan="7"><h1 class="text-center text-danger">No District Found</h1></td>
            </tr>
          @else
            @php  $count = 1; @endphp
            @foreach ($districts as $district)
               <tr>
                 <td>{{ $count++ }}</td>
                 <td>{{ $district->name }}</td>
                 <td>@php if($district->status==1){ @endphp
                            	<span class="label label-success arrowed-in arrowed-in-right">Active</span>
                                @php }else { @endphp
                                <span class="label label-inverse arrowed">Blocked</span>
                            @php } @endphp</td>
                 <td>{{ $district->created_at }}</td>
                 <td>{{ $district->updated_at }}</td>
                 <td>
                 <div class="btn-group">
                      <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Actions
                      </button>
                      <ul role="menu" class="dropdown-menu">
                          <li><a href="#">View Details</a>
                          </li>
                          </li>
                          <li><a href="#">Deactivate</a>
                          </li>
                          <li><a href="#">Activate</a>
                          </li>
                          </li>
                      </ul>
                  </div>
                 </td>
               </tr>
           @endforeach
        @endif
        </table>
      </div>
    </div>
@endsection
