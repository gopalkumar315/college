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

        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> About RIET</h2>

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

                    <h4 class="panel-title">
                        {{$content['course']->course}}   Staff

                    </h4>

                </div>
                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered" method="post" action="{{URL::to('admin/staff_update')}}">
                        @if(Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <div class="form-group">

                            <div class="col-sm-12">
                                <textarea id="redactor" cols="30" rows="30" style="min-height: 200px;"  name="description">
                                    @foreach($content['staff'] as $db)
                                        {{$db->description}}
                                    @endforeach
                                 </textarea>
                                <span class="help-block" style="color:red;">{{$errors->first('description')}}  </span>

                                @foreach($content['staff'] as $db)
                                    <input type="hidden" name="staff_id" value="{{$db->id}}"/>
                                @endforeach


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
                imageUpload:'{{URL::to('admin/redactorupload')}}'
            });
        }
    );
</script>
</body>
</html>
