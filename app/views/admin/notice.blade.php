<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')

    <!--    redactor editor-->
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
</head>

<body>
<section>
    <div class="leftpanel">
        <div class="logopanel">
           <h1><span>[</span>RIET Panel<span>]</span></h1>
        </div>
        <!-- logopanel -->
        <!--navigation menu-->
        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Notice </h2>

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

                    <h4 class="panel-title">Notice Board Fields</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" method="post" action="notice_content">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Notice Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Enter Title"  value='{{Input::old('title')}}' class="form-control">
                                     <span class="help-block" style="color:red;">{{$errors->first('title')}}  </span>
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea id="redactor" name="description">{{Input::old('description')}}    </textarea>
                                <span class="help-block" style="color:red;">{{$errors->first('description')}}  </span>
                            </div>
                        </div>





                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-primary">Submit</button>&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div><!-- panel-footer -->




                    </form>

                </div><!-- panel-body -->



            </div>
        </div>
    </div>

</section>

</body>
</html>
