  <head>
    <meta charset="UTF-8">
    <title> INVENTORY :: PDAM TIRTA KERTA RAHARJA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    {!! Html::style('public/assets/admin/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/image/icon.png') }}" rel="icon" type="icon" />
    <!-- jvectormap -->
    {!! Html::style('public/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    <!-- Theme style -->
    {!! Html::style('public/assets/admin/dist/css/AdminLTE.min.css') !!}
    <!-- DataTables -->
    {!! Html::style('public/assets/admin/plugins/datatables/dataTables.bootstrap.css') !!}

    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('public/assets/admin/dist/css/skins/_all-skins.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- FastClick -->
    {!! Html::script('public/assets/admin/plugins/fastclick/fastclick.min.js') !!}
    <!-- ChartJS 1.0.1 -->
    {!! Html::script('public/assets/admin/plugins/chartjs/Chart.min.js') !!}
    <style>
        body {
            font-family: 'Times New Roman';
        }

        .fa-btn {
            margin-right: 12px;
        }
        .backhead {
            background: url(public/assets/image/background-inventory.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 100%;
            width: 100%;
        }
        .headboard {
            background: url(public/assets/image/header-background-inventory.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 99px;
            width: 100%;
        }
    </style>

  </head>