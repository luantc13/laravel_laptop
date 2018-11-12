

<!DOCTYPE html>
<!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <base href="{{ asset('') }}">
        <link rel="stylesheet" href="public/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="public/admin_asset/bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="public/admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="public/admin_asset/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
            page. However, you can choose any other skin. Make sure you
            apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="public/admin_asset/dist/css/skins/skin-blue.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        @yield('style')
    </head>
    <!--
        BODY TAG OPTIONS:
        =================
        Apply one or more of the following classes to get the
        desired effect
        |---------------------------------------------------------|
        | SKINS         | skin-blue                               |
        |               | skin-black                              |
        |               | skin-purple                             |
        |               | skin-yellow                             |
        |               | skin-red                                |
        |               | skin-green                              |
        |---------------------------------------------------------|
        |LAYOUT OPTIONS | fixed                                   |
        |               | layout-boxed                            |
        |               | layout-top-nav                          |
        |               | sidebar-collapse                        |
        |               | sidebar-mini                            |
        |---------------------------------------------------------|
        -->
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            
            @include('admin.layout.header')

            @yield('content')
            
            @include('admin.layout.footer')
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 3 -->
        <script src="public/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="public/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="public/admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="public/admin_asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="public/admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="public/admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="public/admin_asset/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        {{-- <script src="public/admin_asset/dist/js/demo.js"></script> --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
        <script>
            var socket = io('http://localhost:6001')
            socket.on('notification:user',function(data){
                console.log(data)
                if ($("#count-notification-1").text() != "") {
                    countNotification1 = parseInt($("#count-notification-1").text()) + 1;
                }
                else {
                    countNotification1 = 1
                }
                
                $("#count-notification-1").text(countNotification1)
                $("#count-notification-2").text(parseInt($("#count-notification-2").text()) + 1)
                $("#list-notification").append(`
                    <li>
                        <!-- start notification -->
                        <a href="admin/hoa-don">
                        <i class="fa fa-users text-aqua"></i>` + data.name + ` vừa mới đặt hàng!
                        </a>
                    </li>
                `)

            })
        </script>
        @yield('script')
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
            Both of these plugins are recommended to enhance the
            user experience. -->
    </body>
</html>

