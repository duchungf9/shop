{{--<!DOCTYPE html>--}}
{{--<html dir="ltr" lang="en-US">--}}
{{--<head>--}}
    {{--<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>--}}
    {{--<link href="{{URL::to('/')}}/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>--}}
    {{--<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />--}}
    {{--<meta name="apple-mobile-web-app-capable" content="yes" />--}}
    {{--<meta name="apple-mobile-web-app-status-bar-style" content="black"/>--}}
    {{--@section('head_meta')--}}
    {{--@show--}}
    {{--@section('head_style')--}}
    {{--@show--}}
{{--</head>--}}
{{--<body class="rs">--}}
{{--<div class="loading-bar" style="display: none;">--}}
    {{--<div class="lb lb-left"></div>--}}
    {{--<div class="lb lb-right"></div>--}}
{{--</div>--}}
{{--@section('body')--}}
    {{--base_layout template--}}
{{--@show--}}
{{--@section('footer_script')--}}
{{--@show--}}
{{--<div class="loading"></div>--}}
{{--</body>--}}
{{--</html>--}}
<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/css/bootstrap-theme.min.css">

    <!-- Bootstrap Admin Theme -->
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/css/bootstrap-admin-theme.css">
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/css/bootstrap-admin-theme-change-size.css">

    <!-- Vendors -->
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/vendors/easypiechart/jquery.easy-pie-chart.css">
    <link rel="stylesheet" media="screen" href="{{URL::to('/')}}/admin/vendors/easypiechart/jquery.easy-pie-chart_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{URL::to('/')}}/admin/js/html5shiv.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/admin/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bootstrap-admin-with-small-navbar">
<!-- small navbar -->
<nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left bootstrap-admin-theme-change-size">
                        <li class="text">Change size:</li>
                        <li><a class="size-changer small">Small</a></li>
                        <li><a class="size-changer large active">Large</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li>
                            <a href="#">Reminders <i class="glyphicon glyphicon-bell"></i></a>
                        </li>
                        <li>
                            <a href="#">Settings <i class="glyphicon glyphicon-cog"></i></a>
                        </li>
                        <li>
                            <a href="#">Go to frontend <i class="glyphicon glyphicon-share-alt"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> Username <i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="index.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- main / large navbar -->
<nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="about.html">Admin Panel</a>
                </div>
                <div class="collapse navbar-collapse main-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Dropdown header</li>
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Dropdown header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </div><!-- /.container -->
</nav>

<div class="container">
    <!-- left, vertical navbar & content -->
    <div class="row">
        <!-- left, vertical navbar -->
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li class="active">
                    <a href="{{URL::to('/')}}/admin/dashboard"><i class="glyphicon glyphicon-chevron-right"></i> Dashboard</a>
                </li>
                <li>
                    <a href="forms.html"><i class="glyphicon glyphicon-chevron-down"></i>Danh Mục</a>
                    <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                        <li><a href="{{URL::to('/')}}/admin/category/list"><i class="glyphicon glyphicon-chevron-right"></i> Danh sách </a></li>
                        <li><a href="{{URL::to('/')}}/admin/category/create"><i class="glyphicon glyphicon-chevron-right"></i> Thêm Mới</a></li>
                    </ul>
                </li>
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">731</span> Orders</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">812</span> Invoices</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">27</span> Clients</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">1,234</span> Users</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">2,221</span> Messages</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">11</span> Reports</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">83</span> Errors</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><span class="badge pull-right">4,231</span> Logs</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- content -->
        @section('body')
            base_layout template
        @show
    </div>
</div>

<!-- footer -->
<div class="navbar navbar-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <footer role="contentinfo">

                </footer>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{URL::to('/')}}/admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/admin/js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/admin/js/bootstrap-admin-theme-change-size.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(function() {
        // Easy pie charts
        $('.easyPieChart').easyPieChart({animate: 1000});
    });
</script>
@section('footer_script')
@show
</body>
</html>