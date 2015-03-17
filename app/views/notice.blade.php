<html>
<head>
    <title>Ramgarhia Institute of Engg & Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Live .js        -->
    {{HTML::script('front/js/live.js')}}
    <!-- my style sheet       -->
    {{HTML::style('front/css/style.css')}}
    <!--owl carousel-->
    {{HTML::style('front/gallery/owl-carousel/owl.carousel.css')}}
    {{HTML::style('front/gallery/owl-carousel/owl.theme.css')}}
    <!--owl carousel-->
    <!-- light box for youtube and images    -->
    {{HTML::style('front/lightbox/nivo-lightbox.css')}}
    {{HTML::style('front/lightbox/themes/default/default.css')}}

</head>
<body>

<div class="container main_container">
        <!--//header-->
        @include('header')
        <!--header end-->

        <!-- menu  -->
        @include('menu')
        <!--menu end -->

        <div class="row-fluid">
            <div class="col-xl-12">
                <div class="gallery_page" style="padding-bottom:25px;">
                    @foreach($content as $data)
                        <h3>Notice: {{$data->title}}</h3>
                    @endforeach

                    <div class="notice" style="margin:0px 20px;">
                        @foreach($content as $data)
                        <i>Posted at</i> :- <strong>{{date('d-M-Y',strtotime($data->notice_date))}}</strong>
                            {{$data->description}}
                        @endforeach
                    </div>
                </div>

            </div>
         </div>


        <!-- banner  -->
            @include('footer')
        <!--banner end -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
{{HTML::script('front/lightbox/nivo-lightbox.min.js')}}

</body>
</html>


