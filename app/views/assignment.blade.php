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
                 <div class="assignment_page" style="padding-bottom:25px;">
                     <h3>Assignments</h3>
                        <div class='form'>
                            <form method="post" action="assignment_view">
                                <table>
                                    <tr>
                                        <td>
                                            <span>Select Course</span>
                                            <select id="" name="course" class="course" >
                                                <option value=""></option>
                                                <?php $count=count($content)?>
                                                @for($i=0;$i<$count;$i++)
                                                    @if($content[$i]['parent']==0)
                                                    <option value="">{{$content[$i]['course']}}</option>
                                                    @else
                                                    <option value="{{$content[$i]['course']}}">-{{$content[$i]['course']}}</option>
                                                    @endif
                                                @endfor
                                            </select>
                                        </td>


                                        <td>
                                            <span>Select Year</span>
                                            <select  id="" name="year" class="year">
                                                <option value=""></option>
                                                @for($i=2008;$i<=2050;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </td>


                                        <td>
                                            <span>Select Semester</span>
                                            <select class="semester" id="" name="semester">
                                                <option value=""></option>
                                                <option value="First">First</option>
                                                <option value="Second">Second</option>
                                                <option value="Third">Third</option>
                                                <option value="Fourth">Fourth</option>
                                                <option value="Fifth">Fifth</option>
                                                <option value="Sixth">Sixth</option>
                                                <option value="Seventh">Seventh</option>
                                                <option value="Eight">Eight</option>
                                            </select>
                                        </td>

                                        <td>
                                            <input type="submit" class="submit" value="submit"/>
                                        </td>
                                    </tr>
                                </table>
                                
                            </form>
                        </div>



                     @if(Session::has('content'))
                     <div class="table_content">
                         <table class="table table-bordered table-hover" border="1">
                             <tr>
                                 <td><span class="head"> Course </span></td>
                                 <td><span class="head"> Year </span></td>
                                 <td><span class="head"> Semester </span></td>
                                 <td><span class="head"> Subject </span></td>
                                 <td><span class="head"> Assignment </span></td>
                                 <td><span class="head"> Sub_date </span></td>
                                 <td><span class="head"> Teacher </span></td>
                                 <td><span class="head"> Download </span></td>
                             </tr>

                                 @foreach (Session::get('content') as $data)
                                    <tr>
                                        <td><span class="course">{{$data->course}}</span></td>
                                        <td>{{$data->year}}</td>
                                        <td>{{$data->semester}}</td>
                                        <td>{{$data->subject}}</td>
                                        <td>{{$data->assignment_no}}</td>
                                        <td>{{date('d-M-Y',strtotime($data->submission))}}</td>
                                        <td>{{$data->signature}}</td>
                                        <td><a href="{{asset('assignment/'.$data->file)}}">Download</a></td>


                                    </tr>
                                 @endforeach

                         </table>
                     </div>
                     @endif




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


