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

    </head>
    <body>

        <div class="container main_container">
            <!--//header-->
            @include('header')
            <!--header end-->

            <!-- menu  -->
            @include('menu')
            <!--menu end -->

            <!-- banner  -->
            @include('banner')
            <!--banner end -->



            <div class="row-fluid">
                <div class="col-xl-12">
                    <!--wel come message -->
                    <div class="col-md-7">
                        <div class="message">
                            <div class="welcome">
                                Welcome to Riet
                            </div>
                            <div class="welcome_img">
                                <img src="{{asset('front/images/message.jpg')}}" width="200px" height="150px" alt=""/>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
Loream ipsum dolor sit amet, consectetur eilt, sed elismod tempor incididunt ul
</span>                         <p class="read_more"><a href="{{URL::to('about')}}">Read more</a></p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!--end  come message -->
                    <!--Search  -->
                        <div class="row-fluid cs_course">
                            <div class="col-md-5 col-sm-5">
                                <div class="c_search">
                                    <div class="search">
                                        <div class="welcome">
                                           Search Course
                                        </div>

                                        <div class="form">
                                            <table width="100%">
                                                <tr>
                                                <td class="text">Search By Attribute</td>
                                                <td>

                                                    <select class="search_text_box select_arrow">
                                                    <option value=""></option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    </select>

                                                </td>
                                                </tr>

                                                <tr>
                                                    <td class="text">Search By Keywords</td>
                                                    <td><input class="search_text_box" type="text"/></td>
                                                </tr>

                                                <tr>
                                                    <td class="text"><a href="#">View All Courses</a></td>
                                                    <td><input class="search_submit_btn" type="submit" value="Search"/></td>
                                                </tr>
                                            </table>
                                    </div>

                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <!-- end Search  -->
                </div>
            </div>


            <div class="row-fluid">
              <div class="col-xl-12">
                      <div class="news_notice_training">
                          <div class="col-md-4 c_video">
                              <div class="video">
                                  <div class="title">
                                      Campus Tour
                                  </div>
                                  <div class="embed_video">
                                      <iframe width="100%" height="250" style="outline:none; border:none;"
                                             src="http://www.youtube.com/v/fk8LMW3Cqa8&list=PLKc1cvPzBS_hE9tQrBUOFINwD6_qoneZ3">
                                      </iframe>
                                  </div>
                              </div>
                          </div>

                          <!--notice start -->
                          <div class="col-md-4 ">
                              <!--notice start -->
                              <div class="notice">
                                  <div class="title">
                                      Notice Board
                                  </div>

                              <div class="newsticker-jcarousellite">
                                  <ul>
                                      @foreach($content['notice'] as $data)
                                      <li>
                                          <div class="notice_board">
                                              <div class="date">
                                                  <span>{{date("d M", strtotime($data->notice_date))}}</span>
                                                  <p>{{date("Y", strtotime($data->notice_date))}}</p>
                                              </div>
                                              <div class="responsive_date">
                                                  {{date("d M Y", strtotime($data->notice_date))}}
                                              </div>

                                              <div class="notice_message">
                                                  <p>
                                                      {{substr(strip_tags($data->title),0,20)}}
                                                  </p>
                                                  <span><a href="notice/{{$data->id}}">Read more</a></span>
                                              </div>
                                              <div class="clear"></div>
                                          </div>
                                      </li>
                                      @endforeach
                                  </ul>
                                </div>
                                  <div class="view_all">
                                      <a href="{{URL::to('notice_all')}}">View All</a>
                                  </div>

                              </div>
                              <!--notice end -->
                          </div>
                          <!--notice end -->

                        <!--Training     -->
                          <div class="col-md-4">
                              <div class="training">
                                  <div class="title">
                                      Training and Placement
                                  </div>
                                  <div class="newsticker-jcarousellite">
                                      <ul>
                                            @foreach($content['event'] as $data)
                                            <li>
                                                <div class="notice_board">
                                                    <div class="date">
                                                        <span>{{date("d M", strtotime($data->event_date))}}</span>
                                                        <p>{{date("Y", strtotime($data->event_date))}}</p>
                                                    </div>

                                                    <div class="responsive_date">
                                                        {{date("d M Y", strtotime($data->event_date))}}
                                                    </div>

                                                    <div class="notice_message">
                                                        <p>
                                                            {{substr(strip_tags($data->title),0,20)}}
                                                        </p>
                                                        <span><a href="{{'placement/'.$data->id}}">Read more</a></span>
                                                    </div>



                                                    <div class="clear"></div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                  </div>

                                 <div class="view_all">
                                     <a href="{{URL::to('placement_all')}}">View All</a>
                                 </div>

                              </div>
                          </div>
                  </div>
                  <div class="clear"></div>
              </div>
            </div>

            <!--Gallery-->
            <div class="row-fluid">
                <div class="col-xl-12">
                   <div class="gallery">
                       <div class="row-fluid top_title">
                           <div class="col-md-5 white line" style="margin-top:5px;">

                           </div>

                           <div class="col-md-2  g_title text-center">
                               Gallery
                           </div>

                           <div class="col-md-5 white line"  style="margin-top:5px;">

                           </div>
                       </div>

                       <div class="row-fluid">
                           <div class="col-md-12 ">
                               <div id="owl-demo" class="owl-carousel">

                                   @foreach($content['photo'] as $data)
                                        <div class="item"><img src="{{asset('gallery/thumbnail/'.$data->name)}}" alt="Owl Image"></div>
                                   @endforeach


                               </div>
                           </div>
                       </div>


                       <div class="row-fluid" style="padding-top:20px; !important">
                           <div class="col-md-2 col-md-offset-5  b_title text-center bottom_link">
                           <a href="{{URL::to('photo_album')}}"> View Gallery</a>
                       </div>


                       </div>

                    <div class="clear"></div>
                   </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="col-xl-12 motive">
                    <div class="motive">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset('front/images/motive.png')}}"  alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('front/images/motive.png')}}"  alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        <!-- footer   -->
                @include('footer')
        <!--  footer end     -->
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
            $('.carousel').carousel({
                pause: false //changes the speed
            })
        </script>



        <style>
            #owl-demo .item {
                margin: 3px;
            }

            #owl-demo .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    autoPlay: 3000,
                    items: 4,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3]
                });

            });
        </script>
        {{HTML::script('front/gallery/owl-carousel/owl.carousel.js')}}
        {{HTML::script('front/gallery/assets/js/bootstrap-transition.js')}}
        {{HTML::script('front/gallery/assets/js/bootstrap-tab.js')}}
        {{HTML::script('front/gallery/assets/js/google-code-prettify/prettify.js')}}
        {{HTML::script('front/gallery/assets/js/application.js')}}
        <script>

            $(document).ready(function()
            {
                $(window).bind('scroll', function() {
                    if ($(window).scrollTop() > 100) {
                        $('.menu').addClass('fixed');
                    }
                    else {
                        $('.menu').removeClass('fixed');
                    }
                });
            });

        </script>


        {{HTML::script('front/news/jcarousellite_1.0.1c4.js')}}
        <script type="text/javascript">
            $(function() {
                $(".newsticker-jcarousellite").jCarouselLite({
                    vertical: true,
                    hoverPause:true,
                    visible: 3,
                    auto:2000,
                    speed:1000
                });
            });
        </script>


    </body>
</html>
