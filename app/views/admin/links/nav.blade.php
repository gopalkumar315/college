<div class="leftpanelinner">

  


    <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="{{URL::to('admin/demo')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

        <!--About RIET   -->
        <li class="nav-parent"><a href="#"><i class="fa fa-info-circle"></i> <span>About RIET</span></a>
            <ul class="children">
                <li><a href="{{URL::to('admin/about_view')}}"><i class="fa fa-caret-right"></i>View</a></li>
                <li><a href="{{URL::to('admin/about_edit')}}"><i class="fa fa-caret-right"></i>Edit</a></li>
            </ul>
        </li>

        <!--notice-->
        <li class="nav-parent"><a href="#"><i class="fa fa-bell"></i>Notice & Events</a>
            <ul class="children">
                <li><a href=""><i class="fa fa-caret-right"></i>Add</a>
                    <ul style="list-style:none;" >
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/notice')}}"><i class="fa fa-caret-right"></i>Notice</a></li>
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/event')}}"><i class="fa fa-caret-right"></i>Event</a></li>
                    </ul>
                </li>

                <li><a href=""><i class="fa fa-caret-right"></i>View & Delete</a>
                    <ul style="list-style:none;">
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/notice_list')}}"><i class="fa fa-caret-right"></i>Notice</a></li>
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/event_list')}}"><i class="fa fa-caret-right"></i>Event</a></li>
                    </ul>
                </li>

            </ul>
        </li>

        <!--Course-->
        <li class="nav-parent"><a href="#"><i class="fa fa-book"></i> <span>Course</span></a>
            <ul class="children">
                <li><a href="{{URL::to('admin/course')}}"><i class="fa fa-caret-right"></i>Add Course</a></li>
                <li><a href="{{URL::to('admin/course_select')}}"><i class="fa fa-caret-right"></i>View Or Edit Course</a></li>
                <li><a href="{{URL::to('admin/course_select')}}"><i class="fa fa-caret-right"></i>Delete Course</a></li>
            </ul>
        </li>


        <!--gallery-->
        <li class="nav-parent"><a href="#"><i class="fa fa-picture-o"></i> <span>Gallery</span></a>
            <ul class="children">

                <li><a href="{{URL::to('admin/album')}}"><i class="fa fa-caret-right"></i>Create Album</a></li>
                <li><a href="{{URL::to('admin/photo')}}"><i class="fa fa-caret-right"></i>Upload Photo</a></li>

                <li><a href="#"><i class="fa fa-caret-right"></i>View & Delete</a>
                    <ul style="list-style:none;" >
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/album_list')}}"><i class="fa fa-caret-right"></i>Album</a></li>
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/album_list')}}"><i class="fa fa-caret-right"></i>Photo</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <!--Syllabus-->
        <li class="nav-parent"><a href="#"><i class="fa fa-file-text-o"></i> <span>Syllabus</span></a>
            <ul class="children">

                <li><a href="{{URL::to('admin/syllabus')}}"><i class="fa fa-caret-right"></i>Upload Syllabus</a></li>
                <li><a href="{{URL::to('admin/syllabus_list')}}"><i class="fa fa-caret-right"></i>View Syllabus</a></li>
                <li><a href="{{URL::to('admin/syllabus_list')}}"><i class="fa fa-caret-right"></i>Delete Syllabus</a></li>


            </ul>
        </li>

        <!--subject-->
        <li class="nav-parent"><a href="#"><i class="fa fa-clipboard"></i> <span>Subject</span></a>
            <ul class="children">
                <li><a href="{{URL::to('admin/subject')}}"><i class="fa fa-caret-right"></i>Add Subject</a></li>
                <li><a href="{{URL::to('admin/subject_select')}}"><i class="fa fa-caret-right"></i>View Subject</a></li>
                <li><a href="{{URL::to('admin/subject_select')}}"><i class="fa fa-caret-right"></i>Delete Subject</a></li>
            </ul>
        </li>


        <li class="nav-parent"><a href="#"><i class="fa fa-files-o"></i> <span>Assignment</span></a>
            <ul class="children">

                <li><a href="{{URL::to('admin/assignment')}}"><i class="fa fa-caret-right"></i>Issue Assignment</a></li>
                <li><a href="{{URL::to('admin/assignment_select')}}"><i class="fa fa-caret-right"></i>View Assignment</a></li>
                <li><a href="{{URL::to('admin/assignment_select')}}"><i class="fa fa-caret-right"></i>Delete Assignment</a></li>

            </ul>
        </li>


        <li class="nav-parent"><a href="#"><i class="fa fa-video-camera"></i> <span>Video</span></a>
            <ul class="children">
                <li><a href=""><i class="fa fa-caret-right"></i>Album</a>
                    <ul style="list-style:none;" >
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/video_album')}}"><i class="fa fa-caret-right"></i>Create Album</a></li>
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/video_album_list')}}"><i class="fa fa-caret-right"></i>View & Delete Album</a></li>
                    </ul>
                </li>

                <li><a href=""><i class="fa fa-caret-right"></i>Video</a>
                    <ul style="list-style:none;">
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/video')}}"><i class="fa fa-caret-right"></i>Upload</a></li>
                        <li><a style="text-decoration: none; color:gray;" href="{{URL::to('admin/video_album_list')}}"><i class="fa fa-caret-right"></i>View & Delete Video</a></li>
                    </ul>
                </li>


            </ul>
        </li>


        <li><a href="{{URL::to('admin/staff_select')}}"><i class="fa fa-users"></i>Staff</a></li>
        <li><a href="{{URL::to('admin/facility')}}"><i class="fa fa-smile-o"></i>Facility</a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-cloud-upload"></i> <span>Upload</span></a>
            <ul class="children">
                <li><a href="{{URL::to('admin/upload')}}"><i class="fa fa-caret-right"></i>Upload</a></li>
                <li><a href="{{URL::to('admin/upload_view')}}"><i class="fa fa-caret-right"></i>Upload List</a></li>
            </ul>
        </li>


        <li class="nav-parent"><a href="#"><i class="fa fa-comments"></i> <span>Alumni</span></a>
            <ul class="children">
                <li><a href="{{URL::to('admin/alumni_search')}}"><i class="fa fa-caret-right"></i>Search</a></li>
                <li><a href="{{URL::to('admin/alumni_verify')}}"><i class="fa fa-caret-right"></i>Verification</a></li>
            </ul>
        </li>




    </ul>

</div>
<!-- leftpanelinner -->
