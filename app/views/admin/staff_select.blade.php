<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('.edit').click(function(){
               $var=$('#course').val();
                if($var==null||$var==''||$var=='undefined')
                {
                    alert('select the Staff');
                }
                else
                {
                    $('.edit').attr("href",'staff_edit/'+$var);
                }
            });


            $('.view').click(function(){
                $var=$('#course').val();
                if($var==null||$var==''||$var=='undefined')
                {
                    alert('select the Staff');
                }
                else
                {
                    $('.view').attr("href",'staff_view/'+$var);
                }
            });
        });
    </script>
</head>

<body>
<section>
    <div class="leftpanel">
        <div class="logopanel">
            <h1><span>[</span>RIET Panel<span>]</span></h1>
        </div>
        <!-- logopanel -->

        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i>RIET Staff</h2>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="contentpanel">


            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">RIET Staff</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                        <br>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Staff</label>
                            <div class="col-sm-6">
                                <select name="course" id="course" class="form-control" multiple style="height:200px;">
                                    <?php $count=count($content)?>
                                    @for($i=0;$i<$count;$i++)
                                        @if($content[$i]['parent']==0)
                                            <option value="">{{$content[$i]['course']}}</option>
                                         @else
                                            <option value="{{$content[$i]['id']}}">{{$content[$i]['course']}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                        </div>



                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary edit"> Edit</a>&nbsp;
                                    <a href="#" class="btn btn-primary view"> View</a>
                                </div>
                            </div>
                        </div><!-- panel-footer -->


                </div><!-- panel-body -->

            </div>

        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(
        function()
        {
            $('#redactor').redactor({
                imageUpload: 'redactorupload'

            });
        }
    );
</script>
</body>
</html>
