@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="siteTitle mt-3">
    <a href="/login" style="text-decoration: none;">
        <b class="text-primary">ケンサクくん<i class="fas fa-search" style="transform: scale(-1, 1);"></i></b>
    </a>
    </h1>
</div>

<hr class="headerHr">


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-danger h5">{{ __('パスワードの確認') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right mt-1">{{ __('パスワード') }}</label>

                            <div class="col-md-6 mt-1">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary mt-1">
                                    {{ __('　送信　') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pl-1 mt-2" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れた方') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
