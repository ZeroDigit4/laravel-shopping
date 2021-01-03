@extends('layouts.front-end.master')

@section('content')
<div id="content" class="space-top-none">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-3">
				<ul class="aside-menu">
					@foreach($type as $item)
					<li><a href="/products/{{$item->id}}">{{$item->name}}</a></li>
					@endforeach				
				</ul>
			</div>
			<div class="col-sm-9">
				<div class="beta-products-list">
					<h4>{{$type_name}}</h4>
					<div class="beta-products-details">
						<p class="pull-left">{{'Co ' . count($products) . ' san pham'}}</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						@foreach($products as $key => $item)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="{{asset('image/product/' . $item->image)}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$item->name}}</p>
									<p class="single-item-price">
										<span>${{$item->unit_price}}</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="/cart"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="/product/{{$item->id}}">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach					
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
</div> <!-- .container -->

<div id="footer" class="color-div">
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="widget">
				<h4 class="widget-title">Instagram Feed</h4>
				<div id="beta-instagram-feed"><div></div></div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="widget">
				<h4 class="widget-title">Information</h4>
				<div>
					<ul>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
						<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
		 <div class="col-sm-10">
			<div class="widget">
				<h4 class="widget-title">Contact Us</h4>
				<div>
					<div class="contact-info">
						<i class="fa fa-map-marker"></i>
						<p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
						<p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
					</div>
				</div>
			</div>
		  </div>
		</div>
		<div class="col-sm-3">
			<div class="widget">
				<h4 class="widget-title">Newsletter Subscribe</h4>
				<form action="#" method="post">
					<input type="email" name="your_email">
					<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
				</form>
			</div>
		</div>
	</div> <!-- .row -->
</div> <!-- .container -->
@endsection