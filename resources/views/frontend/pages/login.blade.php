@extends('frontend.layouts.app')

@section('content')

    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Giriş Yap</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="/">Anasayfa</a></li>
                        <li>Giriş Yap</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!--breadcrumbs-->
    <div class="divide80"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <div class="login-form">
                    <h3>Giriş <span>Yap</span></h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Adres</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >Şifre</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Beni Hatırla
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Giriş Yap</button>
                        <a href="/register" class="btn btn-fb-login"> Kayıt Ol</a>
                        <a href="/password/reset">Şifemi Unuttum</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

