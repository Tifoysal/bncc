<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMSIBP</title>
    <link href="{{asset('/')}}img/FaviconBNCC.jpg" rel="icon">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('/')}}backend/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}backend/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}backend/user/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('/')}}backend/user/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{asset('/')}}backend/user/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('/')}}backend/user/css/main.css" rel="stylesheet" />
    
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        @include('backend.partials.topbar')
        @include('backend.partials.sidebar')


        <div class="content-wrapper">
@yield('content')
        </div>
@include('backend.partials.footer')