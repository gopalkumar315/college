<?php

class StaffController extends \BaseController {


    protected $category=array();

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['course']=Course::distinct()->orderby('course')->where('parent','!=','0')->get(array('course','id'));
        return View::make('admin.staff')->with('content',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
        $rule=array(
            'course'=>'required',
            'description'=>'required'
        );

        $message=array(
            'required'=>'This field cannot be empty'
        );

        $v=Validator::make($input,$rule,$message);
        if($v->fails()){
            return Redirect::back()->withErrors($v->errors());
        }
        else{
            $data=new Staff();
            $data->course_id=Input::get('course');
            $data->description=Input::get('description');
            $data->save();
            return Redirect::back()->with('message','Data Inserted');
        }
	}

    /**
     * Staff Select for editing and
     */

     public function select(){
         $data['course']=Course::orderby('parent')->where('parent','0')->take(2)->get();
         foreach($data['course'] as $db){
             $this->category[]=$db;
             $this->category($db->id);
         }
         $data=$this->category;
         return View::make('admin.staff_select')->with('content',$data);
     }

    public function category($id,$str=null){
        $str=$str.'-';
        global $cat;
        $data['course']=Course::orderby('parent')->where('parent',$id)->get();
        foreach($data['course'] as $db){
           $cat=array(
                'id'=>$db->id,
                'course'=>$str.$db->course,
                'parent'=>$db->parent
            );
            $this->category[]=$cat;
        }
    }


    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function staff_edit($id)
	{
		$check=Staff::where('course_id',$id)->count();
        if(empty($check)){

            $data=Course::find($id);
            $course=new Staff();
            $course->course_id=$data->id;
            $course->description='';
            $course->save();
        }

        $data['course']=Course::find($id);
        $data['staff']=Staff::where('course_id',$id)->get();;
        return View::make('admin.staff_edit')->with('content',$data);
    }

    /**
     * Staff update
     */

    public function staff_update()
    {
        $id=Input::get('staff_id');
        $data=Staff::find($id);
        $data->description=Input::get('description');
        $data->save();
        return Redirect::back()->with('message','Data Inserted');
    }


    public function staff_view($id)
    {
        $check=Staff::where('course_id',$id)->count();
        if(empty($check)){

            $data=Course::find($id);
            $course=new Staff();
            $course->course_id=$data->id;
            $course->description='';
            $course->save();
        }

        $data['course']=Course::find($id);
        $data['staff']=Staff::where('course_id',$id)->get();;
        return View::make('admin.staff_view')->with('content',$data);

    }


    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
