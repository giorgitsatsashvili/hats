@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="extra-margin-div">
        <h2 class="login-title">ავტორიზაცია</h2>
        <form class="login-form" action="{{ route('login') }}" method="POST">
            
            @csrf

            <div>
                <input class="field" id="email"type="text" name="email" placeholder="ელ-ფოსტა *" value="{{ old('email') }}" required autofocus>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div>
                <input class="field" id="password" type="password" name="password" placeholder="პაროლი *" required>
                 @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="login-infobox">
                <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="checkbox-text">დამახსოვრება</span>
                <a class="forget" href="#">დაგავიწყდა პაროლი?</a>
                <div class="clear"></div>
            </div>

            <div style="margin-top:25px;text-align:right"><input class="login-btn" type="submit" name="login" value="ავტორიზაცია"></div>
        </form>

        <div class="signup-box">
            <div class="signup-link-box">
                <a class="signup-link" href="#">დარეგისტრირდი ახლა</a>
            </div>
            <div class="fb-signup-box">
                <a class="fb-signup" href="#">რეგისტრაცია FB-ით</a>
            </div>
            <div class="email-signup-box">
                <a class="email-signup" href="#">რეგისტრაცია ელ-ფოსტით</a>
            </div>
        </div>
    </div>
</div>
@endsection
