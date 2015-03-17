<?php

class SyllabusController extends \BaseController
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
        //show form data in first page
        $data['degree']=Course::where('parent','0')->get();
        return View::make('admin.syllabus_degree')->with('degree',$data['degree']);
	}


    /**
     *
     * Pass data according to degree
     */

    public function degree($id)
    {
        $data['trade']=Course::where('parent',$id)->get();
        $data['course_id']=$id;
        return View::make('admin.syllabus')->with('trade',$data);
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
     *  Validations
     *
     * */

    public function validation()
    {
        $input=Input::all();
        $rule=array(
            'course'=>'required',
            'year'=>'required',
            'file'=>'required|mimes:pdf,docx,doc'
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

          return Redirect::back()->withErrors($v->errors());
        }
        else
        {
            $des=public_path().'\syllabus';
            $file=Input::file('file');

            //file new name with extention
            $filename =Input::get('course').'_'.Input::get('year').'.'.$file->getClientOriginalExtension();

            Input::file('file')->move($des.'\\', $filename);
            // Data Sava
            $data=new Syllabus();
            $data->course=Input::get('course');
            $data->year=Input::get('year');
            $data->file=$filename;
            $data->course_id=Input::get('degree');
            if($data->save())
            {
                 return Redirect::back()->with('message','Data Inserted');
            }

        }
	}


    public function syllabus_view($id)
    {
        return View::make('admin.syllabus_list')->with('content',Syllabus::orderby('course')->orderby('year','desc')->where('course_id',$id)->SimplePaginate(15));
    }

    /**
     * Syllabus View by selecting the degree from the degree list view
     */
    public function syllabus_degree_list()
    {
        $data['degree']=Course::where('parent','0')->get();
        return View::make('admin.syllabus_degree_list')->with('degree',$data['degree']);
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
		Syllabus::destroy($id);
        return Redirect::back();
	}


}
