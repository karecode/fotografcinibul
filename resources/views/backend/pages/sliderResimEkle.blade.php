@extends('backend.layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Slider İşlemleri</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Admin Anasayfa</a>
                </li>
                <li class="active">
                    <strong>Slider İşlemleri</strong>
                </li>
            </ol>
        </div>

    </div>

    <div class="wrapper wrapper-content">
        <div id="message"></div>
        <div class="row animated fadeInRightBig">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Slider Resim Ekleme
                            <small>Eklenilen Resimler Anasayfanızda Slider'da Gözükecektir.</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" id="sliderForm" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group"><label class="col-sm-2 control-label">Başlık</label>

                                <div class="col-sm-10"><input required type="text" name="baslik" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Açıklama</label>
                                <div class="col-sm-10"><textarea type="text" maxlength="140" name="yazi"
                                                              class="form-control"></textarea> <span class="help-block m-b-none">Açıklama slider'da Başlık kısmının altında küçük font ile yazılır.</span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Resim</label>

                                <div class="col-sm-10"><input required type="file" class="form-control" name="file">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div id="buttons" class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="reset">İptal</button>
                                    <button class="btn btn-primary" type="submit">Değişiklikleri Kaydet</button>
                                </div>
                            </div>

                            <div class="progress progress-striped active">
                                <div id="bar" style="width: 0%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75"
                                     role="progressbar" class="progress-bar progress-bar-success">
                                    <span id="percent" class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('js')
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="/js/validate/jquery.validate.min.js"></script>
    <script src="/js/validate/localization/messages_tr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sliderForm').validate();
            var options = {
                beforeSerialize: function () {
                    $('#sliderForm').validate();
                },
                beforeSend: function () {
                    $("#progress").show();
                    //clear everything
                    $("#bar").width('0%');
                    $("#message").html("");
                    $("#percent").html("0%");
                    $('#buttons').fadeOut();
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    $("#bar").width(percentComplete + '%');
                    $("#percent").html(percentComplete + '%');
                },
                success: function () {
                    $("#bar").width('100%');
                    $("#percent").html('100%');

                },
                complete: function (response) {
                    var hata=false;
                    if (response.status == 403){
                        var style = 'alert-danger'; hata=true;}
                    else if (response.status == 400){
                        var style = 'alert-warning'; hata=true;}
                    else
                        var style = 'alert-success';
                    var div = '<div class="alert ' + style + ' alert-dismissable">' + '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' + response.responseJSON.msg + '.' + '</div>';
                    $("#message").html(div).delay(2000).fadeOut();
                    if(hata==true)
                    {
                        $("#bar").width('0%');
                        $("#percent").html("0%");
                    }
                    else{
                        document.getElementById("sliderForm").reset();
                        $('#buttons').fadeIn();
                    }
                },
                error: function () {
                    var style = 'alert-danger';
                    var div = '<div class="alert ' + style + ' alert-dismissable">' + '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Server Hatası.' + '</div>';
                    $("#message").html(div);

                }

            };

            $("#sliderForm").ajaxForm(options);

        });
    </script>
@stop