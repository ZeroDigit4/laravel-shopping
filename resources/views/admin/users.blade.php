@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>User List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<div class="row">
    		<div class="col-lg-12">
    			<table class="table table-responsive table-bordered table-stripped">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>Name</th>
    						<th>Email</th>
    						<th>Password</th>
    						<th>Phone</th>
    						<th>Address</th>
    						<th>Created date</th>
    						<th>Updated date</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($users as $k => $item)
    					<tr>
    						<td>{{($k + 1)}}</td>
    						<td>{{$item->full_name}}</td>
    						<td>{{$item->email}}</td>
    						<td>{{$item->password}}</td>
    						<td>{{$item->phone}}</td>
    						<td>{{$item->address}}</td>
    						<td>{{$item->created_at}}</td>
    						<td>{{$item->updated_at}}</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </section>
</div>
@endsection