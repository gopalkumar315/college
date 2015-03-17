<?php

class CourseController extends \BaseController
{
    public function validation()
    {
        //get all input
        $input=Input::ALl();

        //validation rule
        $rule=array(
            'degree'=>'required',
            'course'=>'required|min:3',
            'description'=>'required|min:50'
        );

        //show Validation message
        $message=array(
            'required'=>'This field cannot be empty',
            'min:5'=>'minimum five character is required',
            'min:3'=>'minimum three character is required'
        );

        $v=Validator::make($input,$rule,$message);
        return $v;
    }

    public function store()
    {
        $v=$this->validation();
        if($v->fails())
        {
            return Redirect::to('admin/course')->withErrors($v->errors())->withInput();
        }
        else
        {
           $data=new Course();
            //degree id
           $data->parent=Input::get('degree');
           $data->course=Input::get('course');
           $data->description=Input::get('description');
           if($data->save())
           {
               return Redirect::to('admin/course_selected_view/'.Input::get('degree'));
           }
        }
     }

    public function select($id)
    {

        //   degree id
        $d_id=$id;
        $data['course']=Course::where('parent', '=', $d_id)->get();
        $data['degree']=Course::find($d_id);
        if($data['course']->count())
        {
            return View::make('admin.course_list')->with('data',$data)->with('message',$data['degree']->course);
        }
        else
        {
           return Redirect::to('admin/course_select')->with('status','No data Available');
        }
    }

    public function show($id)
    {
        $data=Course::find($id);
        return View::make('admin.course_view')->with('data',$data);
    }
    public function destroy($id)
    {

             $data=Course::find($id);
            Course::destroy($id);
            return Redirect::to('admin/course_selected_view/'.$data->parent);
    }
    public function edit($id)
    {
        $data=Course::find($id);
        return View::make('admin.course_edit')->with('data',$data);
    }
    public function update()
    {
        $id = Input::get('id');
        $data=Course::find($id);
        $data->course=Input::get('course');
        $data->description=Input::get('description');
        if($data->save())
        {
            return Redirect::to('admin/course_show/'.$id);
        }
    }


}
