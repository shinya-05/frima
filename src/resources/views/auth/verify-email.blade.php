@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">

@section('main')
    <div class="header__wrap">
        <div class="header__text">
            {{ __('ご登録いただいたメールアドレスに確認用のリンクをお送りしました。') }}
        </div>
    </div>
    <div class="body__wrap">
        <p class="body__text">
            {{ __('もし確認用メールが送信されていない場合は、下記をクリックしてください。') }}
        </p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="form__input">
                {{ __('確認メールを再送信する') }}
            </button>
        </form>

        <a class="back__button" href="{{ route('logout') }}">戻る</a>
    </div>
@endsection