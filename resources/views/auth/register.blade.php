@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="extra-margin-div">
        <h2 class="login-title">რეგისტრაცია</h2>
        <form class="login-form" action="{{ route('register') }}" method="POST">

            @csrf
            
            <div>
                <input class="field" id="user" type="text" name="name" placeholder="მომხმარებელი *" value="{{ old('name') }}" required autofocus>
                 @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input class="field" id="email" type="text" name="email" placeholder="ელ-ფოსტა *" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input class="field" id="pass" type="password" name="password" placeholder="პაროლი *" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input class="field" id="password_confirmation" type="password" name="password_confirmation" placeholder="გაიმეორეთ პაროლი *" required>
            </div>
            <div class="gender-box">
                <strong class="gender-title">სქესი: </strong>
                <input class="gender-btn" type="radio" name="gender" value="1"><span class="gender-txt">ქალი</span>
                <input class="gender-btn" type="radio" name="gender" value="2"><span class="gender-txt">მამაკაცი</span>
            </div>
            <div>
                <input class="birth" type="date" name="date_of_birth" id="date_of_birth">
            </div>
            <div class="login-infobox">
                <input type="checkbox"><span class="checkbox-text">დამახსოვრება</span>
                <div class="clear"></div>
            </div>
            <div style="margin-top:25px;text-align:right"><input class="login-btn" type="submit" name="login" value="რეგისტრაცია"></div>
        </form>
    </div>
</div>
@endsection
