<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/kenny/e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 11:38:15 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Blogger | Admin Panel</title>
    <meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- head link -->

    @include('dashboard.includes.head')

</head>

<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper">
    <!-- Top Menu Items -->
@include('dashboard.includes.header')
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
@include('dashboard.includes.left_sidebar')
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
@include('dashboard.includes.right_sidebar')

    <!-- /Right Sidebar Menu -->

    <!-- Main Content -->
<div class="page-wrapper">
@yield('content')
    <!-- /Main Content -->

    <!-- Footer -->
@include('dashboard.includes.footer')

    <!-- /Footer -->

</div>

</div>
<!-- /#wrapper -->
@include('dashboard.includes.extra_link')

</body>


<!-- Mirrored from hencework.com/theme/kenny/e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 11:38:16 GMT -->
</html>
