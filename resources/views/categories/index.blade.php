@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories
        <span class="pull-right">
          <a class="btn btn-success" href="{{ url('categories/create') }}">Create New</a>
        </span>
      </div>
      <div class="panel-body">
        <table class="table table-bordered" width='100%'>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Icon</th>
              <th>Description</th>
              <th>subcategories</th>
              <th>products</th>
              <th>Created By</th>
              <th>Created At</th>
              <th>Updated At</th>
              <td>Actions</th>
            </tr>
          </thead>
          @if(count($categories) == 0)
            <tr>
              <td colspan="7"><h1 class="text-center text-danger">No Categories Exists</h1></td>
            </tr>
          @else
            @php  $count = 1; @endphp
            @foreach ($categories as $category)
               <tr>
                 <td>{{ $count++ }}</td>
                 <td>{{ $category->name }}</td>
                 <td>{{ $category->icon }}</td>
                 <td>{{ $category->description }}</td>
                 <td>{{ count($category->subcategories) }}</td>
                 <td>{{ count($category->products) }}</td>
                 <td>{{ $category->admin->firstName . ' ' .$category->admin->lastName }}</td>
                 <td>{{ $category->created_at }}</td>
                 <td>{{ $category->updated_at }}</td>
                 <td>
                 <div class="btn-group">
                      <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Actions<span class="caret"></span>
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
           {{ $categories->links() }}
        @endif
        </table>
      </div>
    </div>
@endsection
