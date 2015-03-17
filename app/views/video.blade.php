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
                    @foreach($content['video_album'] as $data)
                        <h3>Album {{$data->album_title}}</h3>
                    @endforeach
                    <?php $count=0;?>
                    <table>
                        <tr>
                            @foreach($content['video'] as $data)
                            @if($count<3)
                            <td>
                               <a class="img_hover" href="https://www.youtube.com/watch?v={{$data->link}}" data-lightbox-gallery="gallery1"><img src="http://img.youtube.com/vi/{{$data->link}}/0.jpg"  height="300" width="350">
                                <span></span>
                               </a>
                            </td>
                            <?php $count++;?>
                            @else
                        </tr>
                        <tr>
                            <td>
                                <a class="img_hover" href="https://www.youtube.com/watch?v={{$data->link}}" data-lightbox-gallery="gallery1"><img src="http://img.youtube.com/vi/{{$data->link}}/0.jpg"  height="300" width="350">
                                <span></span>
                            </td>
                            <?php $count=1;?>
                            @endif
                            @endforeach
                        </tr>

                    </table>
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
<script>
    $(document).ready(function(){
        $('a').nivoLightbox();
    });
</script>



</body>
</html>


