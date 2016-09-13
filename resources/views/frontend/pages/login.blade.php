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
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email adres</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Kayıtlı email adresini gir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Şifre</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Şifreni gir">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Beni Hatırla
                            </label>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Giriş Yap</button>
                        <a href="#" class="btn btn-fb-login"> Kayıt Ol</a>
                        <a href="#">Şifemi Unuttum</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

