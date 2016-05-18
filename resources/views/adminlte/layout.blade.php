<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理画面</title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("bower_components/admin-lte/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="{{asset("bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
    <div class="wrapper">

        @include('adminlte.header')

        @include('adminlte.sidebar')

        <!-- content -->
        <div class="content-wrapper">
            @yield('content')
        </div><!-- end content -->

        @include('adminlte.footer')

    </div><!-- end wrapper -->
    <!-- JS -->

    <!-- jquery -->
    <script src="{{asset("bower_components/admin-lte/plugins/jQuery/jQuery-2.2.0.min.js")}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset("bower_components/admin-lte/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- adminLTE -->
    <script src="{{asset("bower_components/admin-lte/dist/js/app.min.js")}}" type="text/javascript"></script>
</body>
</html>
