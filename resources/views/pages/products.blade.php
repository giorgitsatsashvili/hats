@extends("layouts/app")

@section("content")
	@foreach($products as $product)
		<div class="product">
			<h2><a href="products/{{$product->id}}">{{$product->title}}</a></h2>
			<small>created at {{$product->created_at}}</small>
			<p>{{$product->description}}</p>
			<h2>{{$product->price}}</h2>
		</div>
	@endforeach
@endsection