<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')

</head>

<body>
<section>
    <div class="leftpanel">
        <div class="logopanel">
           <h1><span>[</span>RIET Panel<span>]</span></h1>
        </div>
        <!-- logopanel -->

        @include('admin.links.nav')
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')

        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> About RIET</h2>

          
        </div>
        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">About RIET</h4>

                </div>
                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered" method="post" action="about_content">
                        @if(Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <div class="form-group">

                            <div class="col-sm-12">
                                <textarea id="redactor" cols="30" rows="30" style="min-height: 200px;"  name="description"> {{$data->description}} </textarea>
                                <span class="help-block" style="color:red;">{{$errors->first('description')}}  </span>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
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
