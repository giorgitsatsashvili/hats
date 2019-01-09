@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>hello {{ Auth::user()->name }}</p>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="extra-margin-div">
    <div class="wrapper">
        <div class="user-info">
            <div class="user-image">
                <img src="images/user.png" alt="user">
            </div>
            <h2 class="user-name">მარიამ ტუხაშვილი</h2>
            <a class="settings-link" href="#">
                <i class="fas fa-cog"></i>
                Settings
            </a>
        </div>

        <div class="user-tabs">
            <ul class="tabs">
                <li class="tab-item" style="text-align:left">
                    <button class="tab-link" href="#" onclick="switchTabs(0)">რჩეული სია</button>
                </li>
                <li class="tab-item" style="text-align:center">
                    <button class="tab-link" href="#" onclick="switchTabs(1)">ჩემი კალათა</button>
                </li>
                <li class="tab-item" style="text-align:right">
                    <button class="tab-link" href="#" onclick="switchTabs(2)">ჩემი ანგარიში</button>
                </li>
            </ul>

            <div class="tab-content">
                
                <div id="wishlist" class="tab-content-container">
                    <div class="tab-content-box">
                        <img src="images/borsalino_medium(1).jpg" alt="hat">
                        <h4 class="tab-content-box-title">Balley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino_medium(1).jpg" alt="hat">
                        <h4 class="tab-content-box-title">Balley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino_medium(1).jpg" alt="hat">
                        <h4 class="tab-content-box-title">Balley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino_medium(1).jpg" alt="hat">
                        <h4 class="tab-content-box-title">Balley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                </div>
                
                <div id="cart" class="tab-content-container">
                    <div class="tab-content-box">
                        <img src="images/bailey_blue.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Malley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/bailey_blue.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Malley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/bailey_blue.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Malley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/bailey_blue.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Malley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                </div>
                
                <div id="acc" class="tab-content-container">
                    <div class="tab-content-box">
                        <img src="images/borsalino-white.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Nalley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino-white.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Nalley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino-white.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Nalley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                    <div class="tab-content-box">
                        <img src="images/borsalino-white.jpg" alt="hat">
                        <h4 class="tab-content-box-title">Nalley hats Tino Crushable Tribly hat - Red</h4>
                    </div>
                </div>
            </div>
            <div class="more-content-btn">
                <button id="more-btn">სრული სია</button>
            </div>
        </div>
    </div>
</div>
@push("tabs")
    <script src="/js/tabs.js"></script>
@endpush
@endsection
