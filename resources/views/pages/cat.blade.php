@extends("layouts/app")
@section("content")
	<div class="extra-margin-div">
		<div class="wrapper">
            {{ --<h1 class="cat-page-title">{{$categories->title}}</h1>--}}
            @foreach($products as $product)
                <h1 class="cat-page-title"></h1>
			<div class="cat-box">

				<a href="/products/{{$product->id}}">
					<img src="images/borsalino_medium(1).jpg" alt="image">
				</a>
				<h4 class="cat-box-title">
					<a href="#">{{$product->title}}</a>
				</h4>
				<div class="cat-box-icons">
					<a href="#">
						<i class="fas fa-shopping-cart"></i>
					</a>
					<a href="#">
						<i class="fas fa-heart"></i>
					</a>
				</div>
			</div>

@endforeach
		</div>
	</div>
@endsection
