@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Registered Companies
            <span class="pull-right">
          <a class="btn btn-primary" href="{{ url('companies/create') }}">Create New</a>
        </span>
        </div>
        <div class="panel-body">
            <table id="simple-table" class="table  table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if(count($companies) == 0)
                    <tr>
                        <td colspan="7"><h1 class="text-center text-danger">No Company Registered</h1></td>
                    </tr>
                @else
                    @php  $count = 1; @endphp
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->phone }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->created_at }}</td>
                            <td>{{ $company->updated_at }}</td>
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
                @endif
            </table>
        </div>
    </div>
@endsection
