@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Product List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
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
    						<th>Type</th>
    						<th>Description</th>
    						<th>Unit price</th>
    						<th>Promotion price</th>
    						<th>Image</th>
    						<th>Unit</th>
    						<th>New</th>
    						<th>Created date</th>
    						<th>Updated date</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($products as $k => $item)
    					<tr>
    						<td>{{($k + 1)}}</td>
    						<td>{{$item->name}}</td>
    						<td>{{$item->id_type}}</td>
    						<td>{{$item->description}}</td>
    						<td>{{$item->unit_price}}</td>
    						<td>{{$item->promotion_price}}</td>
    						<td>{{$item->image}}</td>
    						<td>{{$item->unit}}</td>
    						<td>{{$item->new}}</td>
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