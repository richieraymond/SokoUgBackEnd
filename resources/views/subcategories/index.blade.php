@extends('layouts.app')


@section('content')
    <div class="card">
      <div class="card-header">
        Subcategories
        <span class="pull-right">
          <a class="btn btn-success" href="{{ url('subcategories/create') }}">Create New</a>
        </span>
      </div>
      <div class="card-body">
        <table class="table table-bordered" width='100%'>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Icon</th>
              <th>Description</th>
              <th>Category</th>
              <th>Products</th>
              <th>Created By</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Actions</th>
            </tr>
          </thead>
          @if(count($subcategories) == 0)
            <tr>
              <td colspan="7"><h1 class="text-center text-danger">No Subcategories Exists</h1></td>
            </tr>
          @else
            @php  $count = 1; @endphp
            @foreach ($subcategories as $subcategory)
               <tr>
                 <td>{{ $count++ }}</td>
                 <td>{{ $subcategory->name }}</td>
                 <td>{{ $subcategory->icon }}</td>
                 <td>{{ $subcategory->description }}</td>
                 <td>{{ $subcategory->category->name }}</td>
                 <td>{{ count($subcategory->products) }}</td>
                 <td>{{ $subcategory->admin->firstName . ' ' .$subcategory->admin->lastName }}</td>
                 <td>{{ $subcategory->created_at }}</td>
                 <td>{{ $subcategory->updated_at }}</td>
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
           {{ $subcategories->links() }}
        @endif
        </table>
      </div>
    </div>
@endsection
