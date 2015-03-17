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

           <div class="syllabus_page table-responsive">
            <h3>Syllabus</h3>
            <div class="title">
                <ul>
                    <li>
                        <a class="show_table1" href="#">Under Graguate Syllabus</a>
                        <br/>
                        <div class="table-responsive table1">
                            <?php $count1=count($content['course']) ;?>
                            <table class="table table-bordered table-hover" border="1">
                                <tr>
                                    <td><strong>Branches</strong></td>
                                    @for($l=0;$l<8;$l++)
                                    <td><div class="head">Batch <br>&<br> Onwards</div></td>
                                    @endfor
                                </tr>
                                @for($i=0;$i<$count1;$i++)
                                <tr>
                                    <?php $j=0;?>
                                    @foreach($content['course'][$i] as $data)
                                    @if($j==0)
                                    <td><div class="course">{{$data->course}}</div></td>
                                    <?php $j++;?>
                                    @endif
                                    <?php $j++;?>
                                    <td><a href="{{asset('syllabus/'.$data->file)}}">{{$data->year}}</a></td>
                                    @endforeach

                                    @for($l=$j;$l<9;$l++)
                                    <td></td>
                                    @endfor
                                </tr>
                                @endfor
                            </table>
                        </div>
                    </li>
                    <li> <a class="show_table2" href="#">Post Graguate Syllabus</a>

                        <br/>
                        <div class="table-responsive table2">
                            <?php $count1=count($content['p_course']) ;?>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td><strong>Branches</strong></td>
                                    @for($l=0;$l<8;$l++)
                                    <td><div class="head">Batch <br>&<br> Onwards</div></td>
                                    @endfor
                                </tr>

                                @for($i=0;$i<$count1;$i++)
                                <tr>
                                    <?php $j=0;?>
                                    @foreach($content['p_course'][$i] as $data)
                                    @if($j==0)
                                    <td><div class="course">{{$data->course}}</div></td>
                                    <?php $j++;?>
                                    @endif
                                    <?php $j++;?>
                                    <td><a href="{{asset('syllabus/'.$data->file)}}">{{$data->year}}</a></td>
                                    @endforeach

                                    @for($l=$j;$l<9;$l++)
                                    <td></td>
                                    @endfor
                                </tr>
                                @endfor


                            </table>
                        </div>



                    </li>
                </ul>
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


