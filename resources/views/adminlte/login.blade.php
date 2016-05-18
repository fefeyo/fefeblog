<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("bower_components/admin-lte/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset("bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset("bower_components/admin-lte/plugins/iCheck/square/blue.css")}}" rel="stylesheet" type="text/css" />
</head>
<body class="login-page">
    <div class="login-box">

        <div class="login-logo">
            <a href="">管理画面</a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            <p class="login-box-msg">ログインして下さい。</p>

            <form action="/admin/login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- メール -->
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <!-- パスワード -->
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <!-- ボタン グリッドでセンタリング-->
                <div class="row">
                    <div class="col-xs-4">
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ログイン</button>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                    </div><!-- /.col -->
                </div>

            </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.2.0 -->
    <script src="{{asset("bower_components/admin-lte/plugins/jQuery/jQuery-2.2.0.min.js")}}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset("bower_components/admin-lte/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{asset("bower_components/admin-lte/plugins/iCheck/icheck.min.js")}}" type="text/javascript"></script>
</body>
</html>
