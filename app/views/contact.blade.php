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

    <div class="row-fluid">
        <div class="col-xl-12">
            <div class="contact_page">
               <div class="col-md-7">

                   <div class="title">
                       <h2>Contact Us</h2>
                       <p>We're happy to answer any question you have or provide you with any estimate.just send us <br>the message in the form below with any question you may have. </p>
                   </div>
                    <br>
                  <div class="form">
                      <h2> Leave us a message</h2><br>
                      <form action="contact_info" method="post">
                          @if(Session::has('message'))
                             <p style="color:#d9534f;">{{ Session::get('message') }}</p>
                          @endif
                          <table>
                              <tr>
                                  <td>
                                      <span>  Your Name (required)</span><br>
                                      <input type="text" name="name" value="{{Input::old('name')}}" class="txt_box"/>
                                      <div style="color:#d9534f; font-weight: bold; font-size: 13px;;">{{$errors->first('name')}}</div>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      <br>
                                      <span>  Your Email (required)</span><br>
                                      <input type="text" name="email" value="{{Input::old('email')}}" class="txt_box"/>
                                      <div style="color:#d9534f; font-weight: bold; font-size: 13px;;">{{$errors->first('email')}}</div>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      <br>
                                      <span>Subject</span><br>
                                      <input type="text" name="subject" value="{{Input::old('subject')}}" class="txt_box"/>
                                      <div style="color:#d9534f; font-weight: bold; font-size: 13px;;">{{$errors->first('subject')}}</div>
                                  </td>
                              </tr>


                              <tr>
                                  <td>
                                      <br/>
                                      <span>Your Message</span><br>
                                      <textarea  id="" rows="5;" name="message"  class="txt_area">{{Input::old('message')}}</textarea>
                                      <div style="color:#d9534f; font-weight: bold; font-size: 13px;;">{{$errors->first('message')}}</div>
                                  </td>
                              </tr>


                              <tr>
                                  <td>
                                      <input type="submit" class="submit" value="Send" />
                                      <input type="reset" class="submit" value="Reset" />
                                  </td>
                              </tr>

                          </table>
                      </form>
                  </div>

               </div>


                <div class="col-md-4">
                    <div class="contact_info">

                      <div>
                          <span>Address</span>
                          <p>Riet,New Satnampura, Phagwara</p>
                      </div>

                       <div>
                           <span>Phone</span>
                           <p>
                               Call: +91 (0) 182 422 0780<br>
                               Call: +91 (0) 182 432 4181<br>
                               Fax : +91 (0) 182 426 8962<br>
                           </p>
                       </div>

                        <div>
                            <span>Email</span>
                            <p>Gopalkumar315@gmail.com</p>
                        </div>

                        <div class="map">
                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:400px;"><div id="gmap_canvas" style="height:300px;width:400px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(31.2189674,75.75915459999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.2189674, 75.75915459999999)});infowindow = new google.maps.InfoWindow({content:"<b>Ramgarhia Institute of Engeering and technology</b><br/>Akal Stadius,Satnam Pura<br/>141008 phagwara" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>

                    </div>


                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- banner  -->
    @include('footer')
    <!--banner end -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>


