@extends("layouts/app")

@section("content")

<div class="extra-margin-div">
	<div class="wrapper">
	@foreach($products as $product)
	<div class="search-product">
		<div class="search-img-box">
			<a href="/products/{{$product->id}}"><img src="images/borsalino_medium(1).jpg" alt="hats"></a>
		</div>
		<div class="search-box-text">
			<h3 class="search-box-title">{{$product->title}}</h3>
			<p class="search-box-body">
				{{$product->description}}
			</p>
			<div class="search-box-btn">
				<a href="/products/{{$product->id}}" class="search-box-btn-link">იხილეთ ვრცლად</a>
			</div>
		</div>
	</div>
	@endforeach
	</div>
</div>


@endsection