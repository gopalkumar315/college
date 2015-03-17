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
            <h2>Alumni Search</h2>
        </div>


        <div class="contentpanel">

            <div class="row">
                <div class="col-md-12">

                    <div style="background: #fff; font-size:18px; font-weight: normal; font-family: 'LatoBold'; padding:10px; margin-bottom:5px;">Search By Class Rollno, University Rollno, City</div>

                    <form action="alumni_search_content" method="post">
                    <table class="table">
                        <tr>
                            <th>Enter Input</th>
                            <th>Search By</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td>
                                <input type="search" name="search" class="form-control" value="{{Input::old('search')}}" placeholder="Enter Input"/>
                                <span>{{$errors->first('search')}}</span>
                            </td>

                            <td>

                                <select name="search_by" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="board_roll_no">University Rollno</option>
                                    <option value="city">City</option>
                                    <option value="class_roll_no">Class Roll no</option>

                                </select>
                                <span>{{$errors->first('search_by')}}</span>
                            </td>

                            <td>
                                <input type="submit" value="Search" class="btn btn-primary"/>
                            </td>

                        </tr>

                    </table>
                    </form>
                </div>

            </div>





            <div class="row">
                <div class="col-md-12">

                    <div style="background: #fff; font-size:18px; font-weight: normal; font-family: 'LatoBold'; padding:10px; margin-bottom:5px;">Search By Branch and Session</div>

                    <form action="alumni_course" method="post">
                        <table class="table">
                            <tr>
                                <th>Select branch</th>
                                <th>Select Session</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>
                                    <select name="branch" id="" class="form-control">
                                        <option value=""></option>
                                        @foreach($content as $data)
                                        <option value="{{$data->course}}">{{$data->course}}</option>
                                        @endforeach
                                    </select>
                                    <span>{{$errors->first('branch')}}</span>
                                </td>

                                <td>

                                    <select name="session" id="" class="form-control">
                                        <option value=""></option>
                                        @for($i=2004;$i<2051;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor

                                    </select>
                                    <span>{{$errors->first('session')}}</span>
                                </td>

                                <td>
                                    <input type="submit" value="Search" class="btn btn-primary"/>
                                </td>

                            </tr>

                        </table>
                    </form>
                </div>

            </div>







        </div>
    </div>
</section>
</body>
</html>
