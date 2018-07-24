<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>Blogger</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}">

    <!-- head link -->

    @include('frontend.includes.head')
<style>
    .header-with-topbar {
        margin-bottom: 108px !important;
    }
    .text-align-center{
        text-align: center;
    }
    .margin-top-50{
        margin-top: 50px;
    }
    .margin-bottom-50{
        margin-bottom: 50px;
    }
</style>
</head>
<body>
<!-- start header -->
@include('frontend.includes.header')

<!-- end header -->
<!-- start blog slider section -->
@yield('slider')
<!-- end blog slider section -->
<!-- start blog section -->
@yield('content')

<!-- end blog section -->
<!-- start footer -->

@include('frontend.includes.footer')

<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->

@include('frontend.includes.extra_links')

</body>

</html>