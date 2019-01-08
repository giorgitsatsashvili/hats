@extends("layouts/app")

@section("content")

<div class="extra-margin-div">
	@foreach($products as $product)
	<div class="search-product">
		<div class="search-img-box">
			<a href="#"><img src="images/borsalino_medium(1).jpg" alt="hats"></a>
		</div>
		<div class="search-box-text">
			<h3 class="search-box-title">{{$product->title}}</h3>
			<p class="search-box-body">
				{{$product->description}}
			</p>
			<div class="search-box-btn">
				<a href="#" class="search-box-btn-link">იხილეთ ვრცლად</a>
			</div>
		</div>
	</div>
	@endforeach
</div>


@endsection