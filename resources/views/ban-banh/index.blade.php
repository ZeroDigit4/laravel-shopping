@extends('layouts.front-end.master')

@section('content')
<div id="content" class="space-top-none">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="beta-products-list">
					<h4>New Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">There are {{count($new_products)}} products</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						@foreach($new_products as $key => $value)
						@if($key>3) @break @endif
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="/product/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$value->name}}</p>
									<p class="single-item-price">
										<span>{{$value->unit_price}}</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="/product/{{$value->id}}">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
						@endforeach						
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>

				<div class="beta-products-list">
					<h4>All Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">There are {{count($all_products)}} products</p>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						@foreach($all_products as $key => $value)								
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="/product/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$value->name}}</p>
									<p class="single-item-price">
										<span>{{$value->unit_price}}</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="/product/{{$value->id}}">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
						@endforeach									
					</div>
					<div class="space40">&nbsp;</div>					
				</div> <!-- .beta-products-list -->
			</div>
		</div> <!-- end section with sidebar and main content -->
	</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection