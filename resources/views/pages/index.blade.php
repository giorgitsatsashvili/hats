@extends("layouts/app")

@section("content")
    <div class="main-banner">
        <img src="images/main-banner.jpg" alt="banner">

        <div class="banner-content">
            <div class="wrapper">
                <h2 class="banner-title">ახალი კოლექცია</h2>
                <p class="banner-text">შეიძინეთ საუკეთესო პროდუქცია სახლიდან გაუსვლელად</p>
                <p class="banner-text">საუკეთესო ფასად</p>
                <a class="banner-btn" href="#">სწრაფი ყიდვა</a>
            </div>
        </div>
    </div>

    <section class="news">
        <div class="wrapper">
            <h2>ახალი დამატებული</h2>

            <div class="new-arrivals">
                <div class="portrait-view">
                    <div class="portrait-box">
                        <a href="#"><img src="images/girl.jpg" alt="image-1"></a>
                        <div class="box-info">
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="price">
                            <strong>80 ლარი</strong>
                        </div>
                    </div>
                </div>
                <div class="landscape-view">
                    @foreach($products as $product)
                        <div class="landscape-box">
                            <a href="/products/{{$product->id}}"><img src="images/hats.jpg" alt="image-2"></a>
                            <div class="box-info">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="price">
                                <strong>{{$product->price}}</strong>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="landscape-box">
                        <a href="#"><img class="bottom-right" src="images/zangi.jpg" alt="image-3"></a>
                        <div class="box-info">
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="price">
                            <strong>45 ლარი</strong>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="wrapper">
            <h2>კატეგორიები</h2>
            <div class="cats-box cats-box-first">
                <img src="images/qali.jpg" alt="women">
                <div class="cats-box-title">
                    ქალები
                </div>
                <div class="cats-box-btn">
                    <a href="#">სწრაფი ყიდვა</a>
                </div>
            </div>
            <div class="cats-box cats-middle-box">
              <img src="images/zangi2.jpg" alt="men">
              <div class="cats-box-title">
               კაცები
              </div>
              <div class="cats-box-btn">
                <a href="#">სწრაფი ყიდვა</a>
              </div>
            </div>
            <div class="cats-box cats-box-last">
              <img src="images/kid.jpg" alt="kids">
              <div class="cats-box-title">
                ბავშვები
              </div>
              <div class="cats-box-btn">
                <a href="#">სწრაფი ყიდვა</a>
              </div>
            </div>
        </div>
    </section>

    <section class="sales">
        <div class="wrapper">
            <div class="sale-content-outer">
                <div class="sale-content-inner">
                    <h2 class="sale-title">საახალწლო ფასდაკლება დაიწყო</h2>
                    <p class="sale-percent">70%</p>
                    <a class="sale-btn" href="#">იხილეთ ვრცლად</a>
                </div>
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <section class="top-rates">

        <h2>აღმოაჩინე შენი სტილი</h2>

        <div class="main-owl-div">
            <div class="owl-div">
                @foreach($products2 as $product)
                    <div class="product-box">
                        <a href="/products/{{$product->id}}"><img src="images/zangis_gogo.jpg" alt=""></a>
                        <div class="box-info">
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="price">
                            <strong>{{$product->price}}</strong>
                        </div>
                    </div>
                @endforeach
                {{--<div class="product-box">
                   <a href="#"><img src="images/owl1.jpg" alt=""></a>
                   <div class="box-info">
                       <a href="#"><i class="fas fa-heart"></i></a>
                   </div>
                   <div class="price">
                       <strong>80 ლარი</strong>
                   </div>
               </div>
               <div class="product-box">
                   <a href="#"><img src="images/owl2.jpg" alt=""></a>
                   <div class="box-info">
                       <a href="#"><i class="fas fa-heart"></i></a>
                   </div>
                   <div class="price">
                       <strong>80 ლარი</strong>
                   </div>
               </div>
               <div class="product-box">
                   <a href="#"><img src="images/owl3.jpg" alt=""></a>
                   <div class="box-info">
                       <a href="#"><i class="fas fa-heart"></i></a>
                   </div>
                   <div class="price">
                       <strong>80 ლარი</strong>
                   </div>
               </div>
               <div class="product-box">
                   <a href="#"><img src="images/owl2.jpg" alt=""></a>
                   <div class="box-info">
                       <a href="#"><i class="fas fa-heart"></i></a>
                   </div>
                   <div class="price">
                       <strong>80 ლარი</strong>
                   </div>
               </div>
               <div class="product-box">
                   <a href="#"><img src="images/owl2.jpg" alt=""></a>
                   <div class="box-info">
                       <a href="#"><i class="fas fa-heart"></i></a>
                   </div>
                   <div class="price">
                       <strong>80 ლარი</strong>
                   </div>
               </div> --}}

            </div>

        </div>
        <div class="btn" id="btn-prev"><img src="images/icons/left-arrow1.svg" alt=""></div>
        <div class="btn" id="btn-next"><img src="images/icons/right-arrow1.svg" alt=""></div>
        <div class="clear"></div>
    </section>

    <section class="brands">
        <div class="wrapper">
            <div class="brand-logos">
                <div class="brand-images">
                    <img src="images/brands/kangol.jpg" alt="kangol-logo">
                </div>
                <div class="brand-images">
                    <img src="images/brands/bailey.jpg" alt="bailey">
                </div>
                <div class="brand-images">
                    <img src="images/brands/barbour.jpg" alt="barbour-logo">
                </div>
                <div class="brand-images">
                    <img src="images/brands/christy.jpg" alt="christy-logo">
                </div>
                <div class="brand-images">
                    <img src="images/brands/lock.jpg" alt="lock-logo">
                </div>
                <div class="brand-images">
                    <img src="images/brands/new.jpg" alt="new-logo">
                </div>
            </div>
        </div>
    </section>

    <div class="clear"></div>
    @push("owl")
    <script src="js/owl-script.js"></script>
    @endpush
@endsection