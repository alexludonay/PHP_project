<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@include('front.commun.header')
<body id="index" class="home page">
@include("front.commun.alert")
<div class="wrapper">
    @include('front.commun.menu')
    <div class="content-wrapper">
        <section class="content">

            @yield("content")
        </section>
    </div>
    @include("front.commun.footer")

    <div class="control-sidebar-bg"></div>
</div>
{!! Html::script("lib/jquery-3.1.0/jquery-3.1.0.min.js") !!}
{!! Html::script("lib/bootstrap-3.3.7/js/bootstrap.min.js") !!}
@yield("headerJS")

</body>
</html>