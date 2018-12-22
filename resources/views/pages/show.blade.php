@extends("layouts/app")

@section("content")

<div class="modal">
	<div class="modal-box">
		<img id="modal-image" src="" alt="">
		<div id="modal-box-close" onclick="closeModalBox()">
			<i class="fas fa-window-close"></i>
		</div>
	</div>
</div>
<main>
	<div class="extra-margin-div">
	<div class="wrapper">
		<div class="post">
			<div class="post-img">
				<div class="main-image">
					<img id="main-image" src="/images/borsalino-avalon-fedora.jpg" onclick="fullScreenImage()" alt="main">
				</div>
				
				<div class="post-pics">
					<div class="post-image">
						<img class="image" src="/images/borsalino-avalon-fedora.jpg" onclick="imageChanger(this)" alt="pic1">
					</div>
					<div class="post-image">
						<img class="image" src="/images/borsalino1.jpg" onclick="imageChanger(this)" alt="pic2">
					</div>
					<div class="post-image">
						<img class="image" src="/images/borsalino2.jpg" onclick="imageChanger(this)" alt="pic3">
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="post-info">
				<h3 class="post-title">{{$product->title}}</h3>
				<small class="post-brand">ბრენდი: Borsallino</small>
				<p class="post-price">ფასი: {{$product->price}} ლარი</p>
				<div class="post-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<div class="post-colors">
					<div class="color1"></div>
					<div class="color2"></div>
					<div class="color3"></div>
				</div>
				<div class="post-size">
					<span>ზომა</span> 
					<select name="hat-size" id="hat-size">
						<option value="55">55</option>
						<option value="70">70</option>
						<option value="95">95</option>
					</select>
				</div>
				<div class="post-desc">
					<p>{{$product->description}}</p>
				</div>
				<div class="post-add">
					<form class="post-quantity">
					 	<input type="number" name="quantity" min="1" max="{{$product->quantity}}" value="1">
					 	<button class="cart-btn" name="add-to-cart">
							<i class="fas fa-shopping-cart"></i>
							კალათაში დამატება
						</button>
					</form>
					
					<a class="wishlist-btn" href="#">
						<i class="far fa-heart"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		
		<hr>

		<div class="feat-posts">
			<h2 class="feat-title">მსგავსი პროდუქცია</h2>
			<div class="feat-post">
				<a href="#"><img src="/images/borsalinoo.jpg" alt="post"></a>
				<h3 class="feat-post-title"><a href="#">Borsalino "baron"</a></h3>
				<p class="feat-price">320 ლარი</p>
				<div class="feat-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
			<div class="feat-post">
				<a href="#"><img src="/images/bailey.jpg" alt="post"></a>
				<h3 class="feat-post-title"><a href="#">Borsalino "baron"</a></h3>
				<p class="feat-price">320 ლარი</p>
				<div class="feat-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
			<div class="feat-post">
				<a href="#"><img src="/images/bailey_bl.jpg" alt="post"></a>
				<h3 class="feat-post-title"><a href="#">Borsalino "baron"</a></h3>
				<p class="feat-price">320 ლარი</p>
				<div class="feat-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
			<div class="feat-post">
				<a href="#"><img src="/images/kangol.jpg" alt="post"></a>
				<h3 class="feat-post-title"><a href="#">Borsalino "baron"</a></h3>
				<p class="feat-price">320 ლარი</p>
				<div class="feat-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
			<div class="feat-post">
				<a href="#"><img src="/images/borsalino.jpg" alt="post"></a>
				<h3 class="feat-post-title"><a href="#">Borsalino "baron"</a></h3>
				<p class="feat-price">320 ლარი</p>
				<div class="feat-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	</div>
</main>
@push("post_image")
    <script src="/js/post-image-script.js"></script>
@endpush
@endsection