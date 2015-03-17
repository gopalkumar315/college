<?php

class SubjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data['trade']=Course::where('parent','!=','0')->distinct()->get(array('course'));
        return View::make('admin.subject')->with('trade',$data['trade']);
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
     *
     * validation
    */
    public function validation()
    {
        //get all inputs
        $input=Input::all();
        $rule=array(
            'course'=>'required',
            'year'=>'required',
            'semester'=>'required',
            'subject'=>'required'
        );

        $v=Validator::make($input,$rule);
        return $v;
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$v=$this->validation();
        if($v->fails())
        {
            return Redirect::back()->with('success','data');
        }
        else
        {
            $data=new Subject();
            $data->course=Input::get('course');
            $data->year=Input::get('year');
            $data->semester=Input::get('semester');
            $data->subject=Input::get('subject');
            $id=2;
            if($data->save())
            {
                Session::flash('success', "Data Inserted Successfully");
                return Redirect::back();

            }

        }
	}


    public function view()
    {
        $data=Subject::where('course',Input::get('course'))->where('semester',Input::get('semester'))->where('year',Input::get('year'))->get();
        $input=Input::all();
        return View::make('admin/subject_list')->with('content',$data)->with('input',$input);
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
	public function edit($id)
	{
		//
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
		Subject::destroy($id);
        return Redirect::to('admin/subject_select');

	}


}
