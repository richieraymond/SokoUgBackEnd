@extends('layouts.shop')
@section('content')
<div class="col-lg-3">
    <h1 class="my-4">Shop Name</h1>
    <div class="list-group">
        <a href="#" class="list-group-item">Dashboard</a>
        <a href="{{ url('products/create') }}" class="list-group-item">My Products</a>
        <a href="#" class="list-group-item">My Orders</a>
        <a href="#" class="list-group-item">My Ads</a>
        <a href="#" class="list-group-item">My Purchases</a>
        <a href="#" class="list-group-item">My Subscriptions</a>
        <a href="#" class="list-group-item">My Profile</a>
        <a href="#" class="list-group-item">Account Settings</a>
    </div>
</div>
<!-- /.col-lg-3 -->

<div class="col-lg-9">
    <div class="row">
    </div>          
<!-- /.row -->
</div>
<!-- /.col-lg-9 -->
@endsection