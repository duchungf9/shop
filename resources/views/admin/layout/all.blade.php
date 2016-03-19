<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    <link href="{{URL::to('/')}}/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    @section('head_meta')
    @show
    @section('head_style')
    @show
</head>
<body class="rs">
<div class="loading-bar" style="display: none;">
    <div class="lb lb-left"></div>
    <div class="lb lb-right"></div>
</div>
@section('body')
    base_layout template
@show
@section('footer_script')
@show
<div class="loading"></div>
</body>
</html>